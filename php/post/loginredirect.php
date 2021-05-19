<?php
$rootDir = $_SERVER["HTTP_HOST"];
$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
$hostServerUrl = "http://$rootDir/inte2047/TheKickbackers";

include("$hostServerUrl/php/jsonformats.php");
include("$hostServerUrl/php/usersessiondao.php");
include("$hostServerUrl/includes/session.php");
?>

<?php

function redirectLogin($currentFilepath, $statusCode) {
	$rootDir = $_SERVER["HTTP_HOST"];
	$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
	$hostServerUrl = "http://$rootDir/inte2047/TheKickbackers";
	$statusCode = 303;
	/* $currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"])); */
	$landingPage = 'index.php';
	header("Location: $hostServerUrl/index.php", true, $statusCode);
	exit;
} // "How do I make a redirect in PHP?". [online] Available at: https://stackoverflow.com/a/768472

?>

<?php
session_start();
session_id();

loginUser($postFormParams);
redirectLogin($currentFilepath, 303);
?>