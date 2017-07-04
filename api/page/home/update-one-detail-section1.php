<?php

try {
    //error_reporting(0);
    session_start();
    require_once '../../function/common.php';
    require_once '../../config/base.php';
    $_SESSION['basepath'] = _BASEPATH_;
    $_SESSION['baseurl'] = _BASEURL_;

    require_once '../../classes/homePageClass.php';
    require_once('../../config/db.php');

    $db = new db_connection();
    $link = $db->createConnection();

    // Recieve data from from API call
    $data = json_decode(file_get_contents('php://input'));

    if (count($data) > 0) {
        $formData = new formData();
        $formData->id = mysql_real_escape_string($data->id, $link);
        $formData->title = mysql_real_escape_string($data->title, $link);
        $obj = new homePageClass();
        $dataStatus = $obj->update_section1($formData);
        $response = returnStatus($dataStatus, $action = 'update');
    } else {
        $response = array('status' => FALSE, 'message' => 'Error in data!');
    }
    session_destroy();
} catch (Exception $ex) {
    $response = array('status' => FALSE, 'message' => $ex->getMessage());
}

echo json_encode($response);
