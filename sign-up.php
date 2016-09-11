<?php
session_start();
require_once('inc/User.php');
$user = new USER();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign-up</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
        <script src="lib/process_signup.js" type="text/javascript"></script>
    </head>
    <body class="signup">
		<a class="brand-logo-box" href="index.php">
			<img class="brand-logo" src="img/logo_home.png" alt="" />
		</a>
        <form id="sign-up-form" class="sign-up-form"  method="post">
			<ul class="errors" style="display: <?php if(!isset($errors)): echo 'none'; endif; ?>;">
				<li class="error-sign"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
				<?php
					foreach($errors as $key => $error){ ?>
						<li class="error-message"><?php echo $error; ?></li>
					<?php }
				?>
			</ul>
			<div class="joined" style="display: <?php if(! isset( $_GET['joined'] ) ): echo 'none'; endif; ?>;">
				Registration successful!
			</div>
            <div id="ajax">

            </div>
			<legend>Sign Up</legend>
            <input type="text" name="reg_username" placeholder="Username">
            <input type="email" name="reg_email" placeholder="E-mail">
            <input type="password" name="reg_password" placeholder="Password" id="reg_password">
			<input type="password" name="reg_password_confirm" placeholder="Confirm password" id="reg_password_confirm">
            <input type="submit" name="reg_submit" value="Apply" id="reg-submit">
        </form>
		<div class="existing">
			Already have a account? <a href="sign-in.php">Log in</a>
		</div>
    </body>
</html>
