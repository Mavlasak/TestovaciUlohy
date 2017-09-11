<?php
namespace App\Component;

use Nette\Application\UI\Control;
use Nette\Application\UI;
use Nette\Application\UI\Form;

class clanekForm extends Control
{

    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/clanekForm.latte');
        $template->render();
    }

    public function createComponentClanekForm()
    {
        $form = new UI\Form;
        $form->addText('nazev', 'Název:');
        $form->addSubmit('submit', 'Přidej článek');
        $form->onSuccess[] = [$this, 'clanekFormSucceeded'];
        return $form;
    }

    public function clanekFormSucceeded(Form $form)
    {
     
    }

}
