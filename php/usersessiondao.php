<?php

$sessionInstval = session_start();

$sessionSetval = isset($_SESSION[$sessionInstval]);

function loginExisting($sessionSetval) {
	// TODO(Daniel): check and verify
	return $sessionSetval;
}


function verifyEmailAddr($postFormParams) {
	$emailAddr = $_POST["email-address"];
	$userPassword = $_POST["user-password"];

	$restApiMethodPost = "POST";
	$httpApiMethodRequest = "REQUEST_METHOD";

	if (filter_var($postFormParams[$emailAddr], FILTER_VALIDATE_EMAIL) == false)
		$errEmailFilter = "Filtered email has encountered an error.";

	elseif ($_SERVER[$httpApiMethodRequest] = $restApiMethodPost)
		return $emailAddr;

	else
		$errData = "Error encountered besides determined Email Address error data.";
}

function verifyUserPassword($postFormParams) {
	$userPassword = $_POST["user-password"];

	$restApiMethodPost = "POST";
	$httpApiMethodRequest = "REQUEST_METHOD";

	if (filter_var($postFormParams[$userPassword], FILTER_VALIDATE_REGEXP) == false)
		$errUserPasswordFilter = "Filtered user password has encountered an error";

	elseif ($_SERVER[$httpApiMethodRequest] == $restApiMethodPost)
		return $userPassword;

	else
		$errData = "Error encountered besides determined User Password error data.";
}

function loginUser($postFormParams) {
	verifyEmailAddr($postFormParams);
	verifyUserPassword($postFormParams);
}

?>