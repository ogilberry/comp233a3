<?php

	//we know the cookies already exist because they are created when the user logs in in loginresponse.php
	$theme = $_GET["theme"];
	$textsize = $_GET["textsize"];
	$navpos = $_GET["navposition"];
	
	$year = 60*60*24+365;
	
	//set the cookies, reload the page
	setcookie('theme', $theme, time()+$year, '/');
	setcookie('textsize', $textsize, time()+$year, '/');
	setcookie('navpos', $navpos, time()+$year, '/');
	
	header('Location: ../pages/preferences.php');
	
?>