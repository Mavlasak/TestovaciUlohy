<?php

namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;
use App\Service\ArticleService;
use App\Service\AuthorService;

class clanekForm extends Control {

    use BaseTrait;

    /** @persistent */
    public $aut2 = array();

    /** @var user */
    private $articleService;

    /** @var user */
    private $authorService;

    public function __construct(ArticleService $articleService, AuthorService $authorService) {
        parent::__construct();
        $this->articleService = $articleService;
        $this->authorService = $authorService;
    }

    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/clanekForm.latte');
        $template->render();
    }

    public function createComponentClanekForm() {
        $form = new UI\Form;
        self::makeBootstrap4($form);
        $form->addText('nazev', 'Název:')
                ->setRequired(FALSE)
                ->addRule(UI\Form::MAX_LENGTH, 'Zadat můžete maximálně %d znaků', 20);
        $form->addTextArea('text', 'Text článku:')
                ->setRequired(FALSE)
                ->addRule(UI\Form::MAX_LENGTH, 'Zadat můžete maximálně %d znaků', 100);
        $autori = $this->authorService->nactiAutory();
        foreach ($autori as $autor) {
            $this->aut2[$autor->email] = $autor;
            $aut1[$autor->email] = $autor->email;
        }
        if ($autori !== array()) {
            $form->addRadioList('autor', 'Autor:', $aut1);
        }
        $form->addSubmit('submit', 'Přidej článek')->setAttribute('class', 'ajax');
        $form->onSuccess[] = [$this, 'clanekFormSucceeded'];
        return $form;
    }

    public function clanekFormSucceeded(Form $form) {
        $values = $form->getValues();
        $autor = $this->aut2[$values->autor];
        $this->articleService->createArticle($values, $autor);
    }

}
