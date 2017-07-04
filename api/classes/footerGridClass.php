<?php

require_once($_SESSION['basepath'] . 'models/footerGridModel.php');

class footerGridClass extends footerGridModel {

    public function getDetails() {
        return $this->getData();
    }

    public function saveDetails($name, $website) {
        return $this->saveData($name, $website);
    }

}
