<?
session_start();
?>
<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/xphp">

<head>

<?php include('assets/structure/incl_header.php'); ?>
    <title>inDev v1.0</title>

</head>

<body>

<?php include('assets/structure/incl_body.php'); ?>

    <div class="content_box_bg">

        <?php
          if($_SESSION['logged_in'])
            include('assets/structure/incl_login.php');
          else
            include('assets/structure/incl_register.php');
        ?>

    </div>

</body>

<footer>

<?php include('assets/structure/incl_footer.php'); ?>

</footer>

</html>
