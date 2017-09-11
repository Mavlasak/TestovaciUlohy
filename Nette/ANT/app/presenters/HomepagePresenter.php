<?php

namespace App\Presenters;

use App\Service\ArticleService;

class HomepagePresenter extends BasePresenter {

    public $articleService;

    function __construct(ArticleService $ArticleService) {
        $this->articleService = $ArticleService;
    }

    protected function createComponentFormular() {
        $formular = new \App\Component\formular($this->articleService);
        return $formular;
    }

    protected function createComponentClanekForm() {
        $clanekForm = new \App\Component\clanekForm();
        return $clanekForm;
    }

}
