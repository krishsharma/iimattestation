<?php

//error_reporting(0);
session_start();
require_once './config/base.php';
$_SESSION['basepath'] = _BASEPATH_;
$_SESSION['baseurl'] = _BASEURL_;

require_once './classes/copyrightClass.php';
require_once('./config/db.php');

$db = new db_connection();
$link = $db->createConnection();

//Call Company class to save details
$company = new copyrightClass();

$response = $company->getCopyrightDetails();

echo json_encode($response);
session_destroy();
