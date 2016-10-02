<!DOCTYPE html>
<html>
	<head>
		<title>PHP and cookies</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../stylesheets/mystyle.css">
		<?php require_once(__DIR__ .'/../scripts/getfontsheet.php'); ?>
		<?php require_once(__DIR__ .'/../scripts/getthemesheet.php'); ?>
	</head>
	
	
	<body>
	
		<div class = "header">
			<h1 class="headeritem" id="headertitle">COMP233 Assignment 3 - PHP and cookies</h1>
		</div>
		
		<?php
			//whichever is output first, nav or content, will be on the left side.
			if($_COOKIE['navpos']=='left'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
		
		<div class="contentpos">
			<div class="maincontent">
			
				<h2>Log in</h2>
				<form action="../scripts/loginresponse.php" method="GET">
					<label for="username">Username: <input type="text" id="username" name="username"></label><br>
					<label for="password">Password: <input type="password" id="password" name="password"></label><br>
					<input type="submit" value="Log in">
				</form>
				
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
				
		</div>
		
	</body>
</html>