<?php
	session_start();
	var_dump($_REQUEST);
	if(isset($userList)){
		$_SESSION['userList'] = array();
	}
	$user['name'] = $_REQUEST['name'];
	$user['email'] = $_REQUEST['email'];
	$user['username'] = $_REQUEST['username'];
	$user['password'] = $_REQUEST['password'];
	
	$user['gender'] = $_REQUEST['gender'];
	
	
	$size = count($_SESSION['userList']);
	$_SESSION['userList'][$size] = $user;
	
	var_dump($_SESSION['userList']);
	
	echo "Sign Up Complete";
?> 
  