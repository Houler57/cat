<?php // NOTE(Daniel): Values may change based on fellow team member's conventions.
$rootDir = $_SERVER["HTTP_HOST"];
$filepath = rtrim(dirname($_SERVER["PHP_SELF"]));
$jsonShoppingCart = fopen("$rootDir/data/json/shoppingcart.json", "r") or die;
$visitorCartJsonVals = json_decode($jsonShoppingCart); // Open then decode json vile to the directed file path.

$currentJsonSessionValues = array($visitorCartJsonVals->visitingUser); // Get the associated key named: `visitingUser`, this is different to `$vistingUser`.

$visitingUserCookie = $visitingUser;
$visitorCartCookies = $visitorCartJsonVals;

function cartSessionAsCookieCallback($visitingUserCookie, $visitorCartCookies) {
	return setcookie($visitingUserCookie, $visitorCartCookies, time() + (86400 * 30), "/data/cookies"); // Sets cookie values in "data/cookies/" with a day's worth expiry.
}

if (!isset($_COOKIE[$visitingUserCookie])) {
	$errVisitingUserCookie = "Visiting User Cookie has not been set!";
} else {
	return cartSessionAsCookieCallback($visitingUserCookie, $visitorCartCookies); // We used a function to apply a bit of SOLID principles.
}
?>