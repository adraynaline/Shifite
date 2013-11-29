<?php 
	include_once('model/test_session/index.php');

	//$rows = user();
session_start();
	foreach($rows as $row){
		$_SESSION['login'] = $row['login'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['mail'] = $row['mail'];
	}

 ?>