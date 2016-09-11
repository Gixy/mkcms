<?php

session_start();
require_once("inc/User.php");
$login = new User();

if (! $login->is_loggedin() )
{
    $login->redirect('index.php');
}
// Test purpose
if(count($_FILES)){
    '<pre>';
    var_dump($_FILES);
    '</pre>';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Post-add</title>
        <link rel="stylesheet" href="style.css" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <script src="lib/jquery.min.js"></script>
        <script type="text/javascript" src="lib/process_upload.js"></script>
    </head>
    <body>
        <div id="ajax">

        </div>
        <form class="add-post-form" action="" method="post" enctype="multipart/form-data">
            <input type="text" name="add-post-title" placeholder="Title">
            <input type="textarea" name="add-post-content" placeholder="Content">
            <input type="file" name="photos" class="add-post-file" value="" multiple>
            <input type="submit" name="add-post-submit" id="upload-button" value="Verzenden">
        </form>
    </body>
</html>
