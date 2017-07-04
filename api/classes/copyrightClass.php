<?php

require_once($_SESSION['basepath'] . 'models/copyrightModel.php');

class copyrightClass extends copyrightModel {

    public function getCopyrightDetails() {
        return $this->getData();
    }

    public function saveCopyrightDetails($copyright) {
        return $this->saveData($copyright);
    }

}
