<?php
  session_start();
  $userList = $_SESSION['userList'];
  foreach($userList as $user){
	  if($user['username']==$_REQUEST['username']){
		  if($user['password']==$_REQUEST['password']){
			  header("location: Home.html");
		  }
	  }
  }
?> 