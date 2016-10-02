<?php

	$username = $_GET["username"];
	$password = $_GET["password"];
	
	if ($username==='test' and $password==='alpha'){
		
		$year = 60*60*24*365;
		//set log in cookie. 1=logged in, 0=not. 1 year expiry
		setcookie('loggedin', 1, time()+$year, "/");		
		//redirect to home page
		header('Location: ../index.php');
	}
	
	else{
		//refresh page to try again
		header('Location: ../pages/login.php');
	}
	
?>