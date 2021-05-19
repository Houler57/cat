<?php
$rootDir = $_SERVER["HTTP_HOST"];
$filepath = rtrim(dirname($_SERVER["PHP_SELF"]));
include("../jsonformats.php");
include("../usersessiondao.php");
include("$rootDir/includes/session.php");
?>

<?php

function redirectLogin($filepath, $statusCode = 303) {
	$rootDir = $_SERVER["HTTP_HOST"];
	$filepath = rtrim(dirname($_SERVER["PHP_SELF"]));
	$landingPage = 'index.php';
	header("Location: http://$rootDir/$landingPage", true, $statusCode);
	exit;
} // "How do I make a redirect in PHP?". [online] Available at: https://stackoverflow.com/a/768472

?>

<?php
session_start();
session_id();

loginUser($postFormParams);
redirectLogin($filepath, 303);
?>