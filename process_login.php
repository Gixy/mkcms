<?php

session_start();
require_once("inc/User.php");
$login = new User();

if ( $login->is_loggedin()!="" )
{
    $login->redirect('index.php');
}

if ( isset($_POST['login_submit']) )
{
    $username_clean = strip_tags( $_POST['login_username'] );
    $password_clean = strip_tags( $_POST['login_password'] );

    if( $login->attemptLogin($username_clean, $password_clean) )
    {
        echo "ok";
    }
    else
    {
        echo "nook";
    }
}

?>
