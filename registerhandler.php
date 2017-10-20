<?php
	var_dump($_REQUEST);
	$isValid = true; 
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$retypepassword=$_REQUEST['retypepassword'];
	
	if(empty($name)||empty($email)||empty($username)||empty($password)||empty($retypepassword)){
		echo "Textfield is empty";
		$isValid=false;
	}
	else{
		if(strlen($name)<2){
			echo "There must be two words";
			$isValid=false;
		}
		else if(strlen($password)<8){
			echo "Password can not be less than 8 characters";
			$isValid=false;
		}
		
	}
	if($isValid==true){
		echo "Shera";
	}
?>