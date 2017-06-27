<?php

//error_reporting(0);
session_start();
require_once './config/base.php';
$_SESSION['basepath'] = _BASEPATH_;
$_SESSION['baseurl'] = _BASEURL_;

require_once('classes/userClass.php');
require_once('config/db.php');

$db = new db_connection();
$link = $db->createConnection();

// Get data from login page
$userName = mysql_real_escape_string($_POST['username'], $link);
$password = mysql_real_escape_string($_POST['password'], $link);

//Call authentication function for login validation
$user = new userClass();
$authenticateStatus = $user->authenticateUser($userName, $password);
switch ($authenticateStatus) {
    case isset($authenticateStatus['fullname']):
        $_SESSION['fullname'] = $authenticateStatus['fullname'];
        header('Location: dashboard.php');
        break;
    case isset($authenticateStatus['userNotFoundInDB']):
        $_SESSION['authenticate_error'] = 'Incorrect credentials';
        header('Location: login.php');
        break;
}
