<?php
    include("./includes/functions.inc.php");
    logoutUser();
    header('Location: login.php');
    exit();
 