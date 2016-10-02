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
				
				<p>Click below to logout. You will be returned to the home page.</p>
				<form action="../scripts/logoutscript.php">
					<input type="submit" value="Log out">
				</form>
				
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
		
	</body>
</html>