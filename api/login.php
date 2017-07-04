<?php

//error_reporting(0);
session_start();
//require_once './config/headers.php';
require_once './config/base.php';
$_SESSION['basepath'] = _BASEPATH_;
$_SESSION['baseurl'] = _BASEURL_;

require_once('./classes/userClass.php');
require_once('./config/db.php');

$db = new db_connection();
$link = $db->createConnection();

// Recieve data from from API call
$data = json_decode(file_get_contents('php://input'));

$userName = mysql_real_escape_string($data->username, $link);
$password = mysql_real_escape_string($data->password, $link);

//Call authentication function for login validation
$user = new userClass();
$authenticateStatus = $user->authenticateUser($userName, $password);
switch ($authenticateStatus) {
    case isset($authenticateStatus['fullname']):
        require_once './config/jwt.php';
        $token = array();
        $token['id'] = $authenticateStatus['fullname'];
        $response = array('status' => TRUE, 'token' => JWT::encode($token, '1234'));
        break;
    case isset($authenticateStatus['userNotFoundInDB']):
        $response = array('status' => FALSE, 'data' => 'Invalid Credentials');
        break;
}

echo json_encode($response);
session_destroy();