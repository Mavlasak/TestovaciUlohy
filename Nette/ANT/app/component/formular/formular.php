<?php

namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;
use App\Service\AuthorService;
use App\Service\ArticleService;
use Tracy\Debugger;

class formular extends Control {

    use BaseTrait;

    /** @var user */
    private $authorService;

    /** @var user */
    private $articleService;

    public function __construct(AuthorService $authorService, ArticleService $articleService) {
        parent::__construct();
        $this->authorService = $authorService;
        $this->articleService = $articleService;
    }

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/formular.latte');
        $template->render();
    }

    public function createComponentFormular() {
        $form = new UI\Form;
        self::makeBootstrap4($form);
        $form->addEmail('email', 'Email:');
        $form->addTextArea('text', 'Text článku:');
        $form->addText('nazev', 'Název článku:');
        $form->addText('jmeno', 'Jméno:');
        $form->addText('prijmeni', 'Příjmení:');
        $form->addSubmit('submit', 'Přidej autora')->setAttribute('class', 'ajax');
        $form->onSuccess[] = [$this, 'formularSucceeded'];
        return $form;
    }

    public function createComponentClanekForm() {
        $clanekForm = new \App\Component\clanekForm($this->articleService, $this->authorService);
        return $clanekForm;
    }

    public function formularSucceeded(Form $form) {
        $values = $form->getValues();
        $id = $this->authorService->createAuthor($values);
        $posledniClanek = $this->articleService->nactiClanek($id);
        $this->template->clanek = $posledniClanek[0];
        //$this->template->clanek = $values;
        if ($this->presenter->isAjax()) {
            $this->redrawControl('snip');
        } else {
            $this->presenter->redirect('this');
        };
    }

}
