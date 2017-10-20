<?php
	var_dump($_REQUEST);
	$isValid = true; 
	$name=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	if(empty($name)||empty($password)){
		echo "No Username or Password";
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