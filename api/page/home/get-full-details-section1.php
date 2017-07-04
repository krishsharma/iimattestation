<?php

try {
    //error_reporting(0);
    session_start();
    require_once '../../config/base.php';
    $_SESSION['basepath'] = _BASEPATH_;
    $_SESSION['baseurl'] = _BASEURL_;

    require_once '../../classes/homePageClass.php';
    require_once('../../config/db.php');

    $db = new db_connection();
    $link = $db->createConnection();

    $obj = new homePageClass();
    $response = $obj->getAll_section1();
    session_destroy();
} catch (Exception $ex) {
    $response = array('status' => FALSE, 'message' => $ex->getMessage());
}

echo json_encode($response);
