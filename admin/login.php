<?php
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
        <title>IIMS Attestation Services | Admin Login</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="assets/css/adminstyle.css"  media="screen,projection"/>
    </head>
    <body>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <h3 class="center"><?php echo COMPANY_NAME; ?> Authentication</h3>
                <form class="col s12 card-panel" action="validate.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate" name="username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Login
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 auth-error">
                            <?php
                            if (isset($_SESSION['authenticate_error'])) {
                                echo $_SESSION['authenticate_error'];
                                session_destroy();
                            }
                            ?>
                        </div>
                    </div>
                </form>
                <footer class="footer center">
                    <p>© 2017 <?php echo COMPANY_NAME; ?>. All Rights Reserved</p>
                </footer>
            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
</html>
