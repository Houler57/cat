// this code was sampled form lab 9 web programming 2020
<?php
    require_once('includes/functions.php');

    logoutUser();
    header('Location: login.php');
    exit();
