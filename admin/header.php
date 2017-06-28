<?php
error_reporting(0);
session_start();
require_once 'config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title><?php echo COMPANY_NAME; ?> | Admin Login</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION['baseurl']; ?>assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION['baseurl']; ?>assets/css/adminstyle.css"  media="screen,projection"/>
    </head>
    <body class="block green lighten-5">