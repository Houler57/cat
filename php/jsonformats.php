<?php
$rootDir = $_SERVER["HTTP_HOST"];
$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
$hostServerUrl = "$rootDir/inte2047/TheKickbackers";

$userDaoFilepath = "$rootDir/data/users.json";
$userDaoData = file_get_contents($userDaoFilepath);

function iterInto($k, $v) {
	$idx = 0;
	$cmp = 0;

	$input = filter_input(INPUT_POST, $k or $v);
	$result = json_encode($input);

	$rootDir = $_SERVER["HTTP_HOST"];
	$hostServerUrl = "$rootDir/inte2047/TheKickbackers";
	
	$userDaoFilepath = "$hostServerUrl/data/users.json";
	$userDaoData = json_decode($userDaoFilepath);

	foreach ($userDaoData as $k => $v)
		if ($v[$idx] == $cmp)
			$userDaoData[$k][updateUserData($userDaoFilepath, $input)] = $result;
}

function readUserData($userDaoFilepath) {
	$rootDir = $_SERVER["HTTP_HOST"];
	$hostServerUrl = "$rootDir/inte2047/TheKickbackers";

	$userDaoFilepath = "$hostServerUrl/data/users.json";
	$userDaoData = file_get_contents($userDaoFilepath);
	
	return json_decode($userDaoData);
}

function updateUserData($userDaoFilepath, $data) {
	$rootDir = $_SERVER["HTTP_HOST"];
	$hostServerUrl = "$rootDir/inte2047/TheKickbackers";

	$userDaoFilepath = "$hostServerUrl/data/users.json";
	$data = file_get_contents($userDaoFilepath);

	$encoded = json_encode($data);
	file_put_contents($userDaoFilepath, $encoded);
}
?>