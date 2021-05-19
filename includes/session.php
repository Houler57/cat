<?php

function okSession($visitingUserSessionId = session_id()) {
	return $visitingUserSessionId;
} okSession();

function okTransSid($sessionForSid = $_SESSION["session.use_trans_sid"]) {
	return $sessionForSid;
} okTransSid($sessionForSid);

function okCookie($sessionForCookie = $_SESSION["session.use_only_cookies"]) {
	return $sessionForCookie;
} /* okCookie($sessionForCookie); */

function setSessionCookie() {

	$cookiesession = okCookie();

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