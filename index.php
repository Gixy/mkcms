<?php

session_start();
require_once("inc/User.php");
$login = new User();

if( isset( $_GET['sign_out'] ) ){
    $login->attemptLogout();
};

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,300italic,400italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="header">
            <div class="header-box">
                <a href="#">
                    <img class="profile-image" src="img/about_me.jpg"></div>
                </a>
            </div>
        </div>
        <div id="content">
            <div class="content-box">
            </div>
        </div>
        <div id="footer">
            <div class="footer-box">
                <a class="sign-in-box" href="sign-in.php" style="display: <?php if( $login->is_loggedin() ): echo 'none'; endif; ?>;">
                    <div class="signin">
                        Login
                    </div>
                </a>
                <div class="copyright">

                </div>
                <a class="register-box" href="sign-up.php" style="display: <?php if( $login->is_loggedin() ): echo 'none'; endif; ?>;">
                    <div class="register">
                        Sign up
                    </div>
                </a>
                <a class="logout-box" href="index.php?sign_out" style="display: <?php if(! $login->is_loggedin() ): echo 'none'; endif; ?>;">
                    <div class="logout">
                        Logout
                    </div>
                </a>
                <a class="manage-box" href="manage_posts.php" style="display: <?php if(! $login->is_loggedin() ): echo 'none'; endif; ?>;">
                    <div class="manage">
                        Manage
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>
