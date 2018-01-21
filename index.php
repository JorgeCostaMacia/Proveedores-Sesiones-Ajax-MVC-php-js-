<?php
    include_once "controller/includes/autoloader.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head> <?php include_once "views/layout/head.php"; ?></head>   <!-- HEAD -->

    <body>
        <?php include_once "controller/controller.php"; ?>          <!-- CONTROLADOR-->
        <?php include_once "views/layout/footer.php"; ?>            <!-- FOOTER -->
    </body>
</html>