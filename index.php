<?php
	//session_start();
	include_once('controller/test_session/index.php');
	include_once('model/sql.php');
	if(!isset($_GET['appli'])){
		$appli = 'home';
	}
	else {
		$appli = $_GET['appli'];
	}

	if(!isset($_GET['action'])){
		$action = 'index';
	}
	else {
		$action = $_GET['action'];
	}
	if(!isset($_GET['page'])){
	 	$page = 'content_accueil';
	}
	else {
		$page = $_GET['page'];
	}
	if($appli == 'home'){
		if($action == 'index'){
			include_once('controller/home/index.php');
		}
		else if($action == 'submit_recipe'){
			include_once('controller/home/submit_recipe.php');
		}
		else if ($action == 'myrecipe'){
			include_once('controller/home/myrecipe.php');
		}
		else if ($action == 'none'){
			echo 'tamere';
		}
		else {
			echo 'ya rien';
		}

	}
	else {
		echo 'vraiment rie, ';
	}

?>