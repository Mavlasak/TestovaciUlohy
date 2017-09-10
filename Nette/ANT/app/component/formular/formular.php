<?php
namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;

class formular extends Control
{

    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/formular.latte');
        $template->render();
    }

    public function createComponentFormular()
    {
        $form = new UI\Form;
        $form->addEmail('email', 'Email:');
        $form->addTextArea('text', 'Text:');
        $form->addText('jmeno', 'Jméno:');
        $form->addText('prijmeni', 'Příjmení:');
        $form->addSubmit('submit', 'Přihlásit se');
        $form->onSuccess[] = [$this, 'formularSucceeded'];
        return $form;
    }

    public function formularSucceeded(Form $form)
    {
     
    }

}
