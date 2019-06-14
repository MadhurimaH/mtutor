<?php
	//session start
	session_start();

	// includes
	require_once('inc/KLogger.php');
	include ('inc/config.php');	
	include ('inc/utils.php');	
	include ('classes/messages.php');	
	include ('classes/main.php'); 	
	include ('classes/controller.php');	
	include ('classes/model.php');	
	include ('controllers/home.php');	
	include ('controllers/user.php');		
	include ('controllers/tutor.php');	
	include ('controllers/stud.php');		
	include ('controllers/modt.php');
	include ('models/home.php');	
	include ('models/user.php');	
	include ('models/tutor.php');	
	include ('models/stud.php');
	include ('models/modt.php');

	$mainPage = new Main($_GET);
	$controller = $mainPage->createController(); 
	if($controller) {
		$controller->executeAction();
	}
?>