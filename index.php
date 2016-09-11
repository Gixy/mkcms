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
                <a class="brand-logo-box" href="index.php">
                    <img class="brand-logo" src="img/logo_home.png" alt="" />
                </a>
                <ul class="desktop-menu">
                    <a class="menu-item-box" href="about.php">
                        <li class="about menu-item">Over mij</li>
                    </a>
                    <a class="menu-item-box" href="#">
                        <li class="voorbeeld menu-item">Voorbeeld</li>
                    </a>
                    <a class="menu-item-box" href="my_work.php">
                        <li class="Mijn werk menu-item">Projecten</li>
                    </a>
                    <a class="menu-item-box" href="contact.php">
                        <li class="contact menu-item">Contact</li>
                    </a>
                </ul>
            </div>
        </div>
        <div id="content">
            <div class="content-box">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <br>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                </p>
                <br>
                <p>
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                </p>
                <br>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </p>
                <br>
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
