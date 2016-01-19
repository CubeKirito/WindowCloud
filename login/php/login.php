<?php
	$adminData = file_get_contents('../../db/Admins.db');
	$guestData = file_get_contents('../../db/Guests.db');

	$id = $_POST['id']l
	$pw = $_POST['pw'];

	$admins = explode('\r\n', $adminData);

	foreach($k as $admins) {
		$data = explode('|', $admins);
		
		if($data[0] == $id && $data[1] == $pw) {
			$_SESSION['logined'] = true;

			$_SESSION['id'] = $id;
			$_SESSION['type'] = "admin";
		}
	}

	
	$guests = explode('\r\n', $guestData);

	foreach($k as $guests) {
		$data = explode('|', $guests);

		if($data[0] == $id && $data[1] == $pw) {
			$_SESSION['logined'] = true;

			$_SESSION['id'] = $id;
			$_SESSION['type'] = "guest";
		}
	}
	
	if($_SESSION['logined') $result['RESULT'] = "LOGIN_FAILED";
	else $result['RESULT'] = "LOGIN_SUCCESS";
?>