<?php

require_once($_SESSION['basepath'] . 'models/userModel.php');

class userClass extends userModel {

    public function authenticateUser($userName, $password) {
        $dbModel = new userModel();
        $dataArray = $dbModel->getUser($userName, md5($password));

        return $dataArray;
    }

}
