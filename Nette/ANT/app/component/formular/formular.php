<?php

namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;
use App\Service\AuthorService;

class formular extends Control {

       /** @var user */
    private $authorService;

    public function __construct(AuthorService $authorService)
    {
        parent::__construct();
        $this->authorService = $authorService;
    }
    
    public function render() {
        $template = $this->template;
        $template->setFile(__DIR__ . '/formular.latte');
        $template->render();
    }

    public function createComponentFormular() {
        $form = new UI\Form;
        $form->addEmail('email', 'Email:');
        $form->addTextArea('text', 'Text:');
        $form->addText('jmeno', 'Jméno:');
        $form->addText('prijmeni', 'Příjmení:');
        $form->addSubmit('submit', 'Přidej autora');
        $form->onSuccess[] = [$this, 'formularSucceeded'];
        return $form;
    }

    public function formularSucceeded(Form $form) {
         $values = $form->getValues();
//Debugger::barDump($this->articleService, 'xxx');
        $this->authorService->createAuthor($values);
    }

}
