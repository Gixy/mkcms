<?php

session_start();
require_once("inc/User.php");
$login = new User();

if (! $login->is_loggedin() )
{
    $login->redirect('sign-in.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Posts</title>
        <link rel="stylesheet" href="style.css" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea', plugins: "autoresize", autoresize_max_height: 390, autoresize_min_height: 390 });</script>
    </head>
    <body class="manage_posts">
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
        <div id="manage-posts">
            <div class="manage-posts-box">
                <div class="manage-header">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Berichtbeheer <a href="add_post.php" div class="add-post-box"><div class="add-post"><i class="fa fa-plus" aria-hidden="true"></i> Nieuw bericht</div></a>
                </div>
                <div class="left">
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/1.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Ontvoeringen in Rusland
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/2.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Oorlogen in Zambië
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/1.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Ontvoeringen in Rusland
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/2.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Vrede in Zambië
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/1.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Ontvoeringen in Rusland
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/1.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Ontvoeringen in Rusland
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/2.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Oorlogen in Turkije
                            </div>
                        </div>
                    </a>
                    <a href="#" class="tab-box">
                        <div class="tab">
                            <img src="img/2.jpg" class="post-image" alt="" />
                            <div class="post-title">
                                Oorlogen in Zambië
                            </div>
                        </div>
                    </a>
                    <a href="#" class="load-more-box">
                        <div class="load-more">
                            <i class="fa fa-refresh"></i> Laad meer...
                        </div>
                    </a>
                </div>
                <div class="right">
                    <div class="post">
                        <input type="text" name="alter-post-title" class="alter-post-title" placeholder="Titel">
                        <textarea class="ater-post-content" name="alter-post-content">Easy (and free!) You should check out our premium features.</textarea>
                        <button type="button" name="alter-post" class="submit-alter-post">Update</button>
                    </div>
                </div>

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
            </div>
        </div>
        <script src="js/jquery.min.js"/>
    </body>
</html>
