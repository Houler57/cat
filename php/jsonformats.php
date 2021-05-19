<?php
$userDaoFilepath = "/~kickbackers/data/users/userdaos.json";
$userDaoData = file_get_contents($userDaoFilepath);

function iterInto($k, $v) {
	$idx = 0;
	$cmp = 0;

	$input = filter_input(INPUT_POST, $k or $v);
	$result = json_encode($input);

	$userDaoFilepath = "/~kickbackers/data/users/userdaos.json";
	$userDaoData = json_decode($userDaoFilepath);

	foreach ($userDaoData as $k => $v)
		if ($v[$idx] == $cmp)
			$userDaoData[$k][updateUserData($userDaoFilepath, $input)] = $result;
}

function readUserData($userDaoFilepath) {
	$userDaoFilepath = "/~kickbackers/data/users/userdaos.json";
	$userDaoData = file_get_contents($userDaoFilepath);
	return json_decode($userDaoData);
}

function updateUserData($filepath, $data) {
	$filepath = "/~kickbackers/data/users/userdaos.json";
	$data = file_get_contents($filepath);

	$encoded = json_encode($data);
	file_put_contents($filepath, $encoded);
}
?>