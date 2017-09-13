<?php

namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;
use App\Service\ArticleService;
use App\Service\AuthorService;
use Tracy\Debugger;

class clanekForm extends Control {

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
        $form->addText('nazev', 'Název:');
        $form->addTextArea('text', 'Text článku:');
        $autori = $this->authorService->nactiAutory();
        foreach ($autori as $autor) {
            $this->aut2[$autor->email] = $autor;
            $aut1[$autor->email] = $autor->email;
        }
        if ($autori !== array()) {
            $form->addRadioList('autor', 'Autor:', $aut1);
        }
        $form->addSubmit('submit', 'Přidej článek');
        $form->onSuccess[] = [$this, 'clanekFormSucceeded'];
        return $form;
    }

    public function clanekFormSucceeded(Form $form) {
        $values = $form->getValues();
        $autor = $this->aut2[$values->autor];
        $this->articleService->createArticle($values, $autor);
    }

}
