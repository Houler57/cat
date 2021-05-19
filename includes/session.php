<?php

function okSession($visitingUserSessionId) {
	$visitingUserSessionId = session_id();
	return $visitingUserSessionId;
} okSession($visitingUserSessionId);

function okTransSid($sessionForSid) {
	$sessionForSid = $_SESSION["session.use_trans_sid"];
	return $sessionForSid;
} okTransSid($sessionForSid);

function okCookie($sessionForCookie) {
	$sessionForCookie = $_SESSION["session.use_only_cookies"];
	return $sessionForCookie;
} /* okCookie($sessionForCookie); */

function setSessionCookie() {
	$sessionForCookie = $_SESSION["session.use_only_cookies"];

	$cookiesession = okCookie($sessionForCookie);

	if (isset($_COOKIE[$cookiesession])) {
		ini_set("session.use_trans_sid", false);
		session_start();
		okTransSid(1);
		okCookie(0);
	} else {
		ini_set("session.use_trans_sid", true);
		session_start();
		okTransSid(0);
		okCookie(1);
	}
} setSessionCookie();
// "php session.use_trans_sid". [online] Available at: https://stackoverflow.com/a/10811392
?>