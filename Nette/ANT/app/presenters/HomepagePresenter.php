<?php

namespace App\Presenters;

use App\Service\ArticleService;
use App\Service\AuthorService;

class HomepagePresenter extends BasePresenter {

    public $articleService;
    
    public $authorService;

    function __construct(ArticleService $ArticleService, AuthorService $AuthorService) {
        $this->articleService = $ArticleService;
        $this->authorService = $AuthorService;
    }

    protected function createComponentFormular() {
        $formular = new \App\Component\formular($this->authorService);
        return $formular;
    }

    protected function createComponentClanekForm() {
        $clanekForm = new \App\Component\clanekForm($this->articleService,$this->authorService );
        return $clanekForm;
    }

}
