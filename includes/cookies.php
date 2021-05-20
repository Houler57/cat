<?php // NOTE(Daniel): Values may change based on fellow team member's conventions.
$rootDir = $_SERVER["HTTP_HOST"];
$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));

$hostServerUrl = "$rootDir/inte2047/TheKickbackers";

include("$hostServerUrl/includes/session.php");

$visitingUserSessionId = session_id();
$sessionForSid = $_SESSION["session.use_trans_sid"];

session_start();
okSession($visitingUserSessionId);
okTransSid($sessionForSid);

$jsonShoppingCart = fopen("$hostServerUrl/data/json/shoppingcart.json", "r") or die;
$visitorCartJsonVals = json_decode($jsonShoppingCart); // Open then decode json vile to the directed file path.

$currentJsonSessionValues = array($visitorCartJsonVals->visitingUser); // Get the associated key named: `visitingUser`, this is different to `$vistingUser`.
$visitorCartCookies = $visitorCartJsonVals;

function cookieCallback($currentJsonSessionValues, $visitorCartCookies) {
	$rootDir = $_SERVER["HTTP_HOST"];
	$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));

	$hostServerUrl = "$rootDir/inte2047/TheKickbackers";
	return setcookie($currentJsonSessionValues, $visitorCartCookies, time() + (86400 * 30), "$hostServerUrl/data/cookies"); // Sets cookie values in "data/cookies/" with a day's worth expiry.
}

setSessionCookie();
cookieCallback($currentJsonSessionValues, $visitorCartCookies);
?>