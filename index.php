<?php
	error_reporting(E_ALL);

	session_start();
	echo $_SESSION['id'];
	if($_SESSION['logined'] == true) {
		header('Location: cloud/');
	} else {
		header('Location: login/');
	}
?>