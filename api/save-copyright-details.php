<?php

try {
    //error_reporting(0);
    session_start();
    require_once './config/base.php';
    $_SESSION['basepath'] = _BASEPATH_;
    $_SESSION['baseurl'] = _BASEURL_;

    require_once './classes/copyrightClass.php';
    require_once('./config/db.php');

    $db = new db_connection();
    $link = $db->createConnection();

    // Recieve data from from API call
    $data = json_decode(file_get_contents('php://input'));

    if (count($data) > 0) {
        $copyright = mysql_real_escape_string($data->copyright, $link);

        //Call Company class to save details
        $obj = new copyrightClass();

        $dataStatus = $obj->saveCopyrightDetails($copyright);
        if ($dataStatus == TRUE) {
            $response = array('status' => TRUE, 'message' => 'Data saved');
        } else {
            $response = array('status' => FALSE, 'message' => 'Error in saving data');
        }
    } else {
        $response = array('status' => FALSE, 'message' => 'Error in data!');
    }
    session_destroy();
} catch (Exception $ex) {
    $response = array('status' => FALSE, 'message' => $ex->getMessage());
}
echo json_encode($response);
