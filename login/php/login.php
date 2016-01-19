<?php
	$adminData = file_get_contents('../../db/Admins.db');
	$guestData = file_get_contents('../../db/Guests.db');

	$id = $_POST['id']l
	$pw = $_POST['pw'];

	$admins = explode('\r\n', $adminData);

	foreach($k as $admins) {
		$data = explode('|', $admins);
		
		if($data['id'] == $id && $data['pw'] == $pw) {
			
		}
	}
?>