<?php

session_start();
require_once("inc/User.php");
$login = new User();

if ($login->is_loggedin()!="")
{
    $login->redirect('index.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
        <script src="lib/process_login.js" type="text/javascript"></script>
    </head>
    <body class="login">
        <a class="brand-logo-box" href="index.php">
			<img class="brand-logo" src="img/logo_home.png" alt="" />
		</a>
        <form class="login_form" method="post">
            <div class="ajax">

            </div>
            <legend>Admin Login</legend>
            <input type="text" id="login_username" name="login_username" placeholder="Username">
            <input type="password" id="login_password" name="login_password" placeholder="Password">
            <input type="submit" id="login_submit" name="login_submit" value="Authenicate" class="login_submit">
        </form>
        <div class="forgot">
            Don't have a account? <a href="sign-up.php"> Sign up</a>
        </div>
    </body>
</html>
