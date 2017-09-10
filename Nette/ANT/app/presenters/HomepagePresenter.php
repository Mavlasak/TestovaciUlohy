<?php

namespace App\Presenters;

class HomepagePresenter extends BasePresenter {

    protected function createComponentFormular() {
        $formular = new \App\Component\formular();
        return $formular;
    }

}
