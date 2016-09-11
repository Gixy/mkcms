<?php
session_start();
require_once('inc/User.php');
$user = new USER();

if(isset( $_POST['reg_submit']) )
{
    $username_clean = strip_tags($_POST['reg_username']);
    $password_clean = strip_tags($_POST['reg_password']);
    $email_clean    = strip_tags($_POST['reg_email']);


    if ( $username_clean == "" )
    {
        $errors[] = "It appears the username is blank";
    }

    else if ($email_clean == "" )
    {
        $errors[] = "It appears the e-mail field is blank";
    }

    else if( $password_clean == "" )
    {
        $errors[] = "It appears the password is blank";
    }

    else if ( !filter_var($email_clean, FILTER_VALIDATE_EMAIL) )
    {
        $errors[] = "Invalid email adress";
    }

    else if ( strlen($password_clean) < 6 )
    {
        $errors[] = "Password is to short";
    }

    else
    {
        try
        {
            $query = $user->runQuery("SELECT username, email FROM users WHERE username=:uname OR email=:umail");
			$query->execute(array(':uname'=>$username_clean, ':umail'=>$email_clean));
			$row = $query->fetch(PDO::FETCH_ASSOC);

            if( $row['username'] == $username_clean )
            {
                $errors[] = "This username is already taken :(";
            }
            else if ( $row['email'] == $email_clean )
            {
                $errors[] = "This e-mail is already taken :(";
            }
            else
            {
                if( $user->attemptRegister( $username_clean, $password_clean, $email_clean ) )
                {
                    echo "ok";
                }
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }
}

 ?>
