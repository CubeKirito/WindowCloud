<?php
	session_start();
	$adminData = file_get_contents('../../db/Admins.db');
	$guestData = file_get_contents('../../db/Guests.db');

	$logined = false;
	
	if(!isset($_POST['id']) || !isset($_POST['pw'])) { $result['RESULT'] = "LOGIN_FAILED"; exit(json_encode($result)); }
	$id = $_POST['id'];
	$pw = sha1($_POST['pw']);


	$admins = explode('\r\n', $adminData);

	foreach($admins as $k) {
		$data = explode('|', $k);

		if($data[0] == $id && $data[1] == $pw) {
			$_SESSION['logined'] = true;

			$logined = true;

			$_SESSION['id'] = $id;
			$_SESSION['type'] = "admin";
		}
	}

	
	$guests = explode('\r\n', $guestData);

	foreach($guests as $k) {
		$data = explode('|', $k);

		if($data[0] == $id && $data[1] == $pw) {
			$_SESSION['logined'] = true;

			$logined = true;

			$_SESSION['id'] = $id;
			$_SESSION['type'] = "guest";
		}
	}
	
	if($logined) $result['RESULT'] = "LOGIN_SUCCESS";
	else $result['RESULT'] = "LOGIN_FAILED";
	exit(json_encode($result));
?>