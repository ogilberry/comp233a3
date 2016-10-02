<?php
	//note that we know the preference cookies are already set because it is done in loginresponse.php
	function checkSelected($cookieName, $value){
		//if the given cookie matches the given value, echo 'selected'. Only for use on this pages preferences form
		if($_COOKIE[$cookieName]==$value){
			echo 'selected';
		}
	}
	//fantastic function name
	function checkChecked($cookieName, $value){
		if($_COOKIE[$cookieName]==$value){
			echo "checked=\"checked\" ";
		}
	}
	
?>

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
			
				<h2>Preferences</h2>
				<form action="../scripts/savepreferences.php" method="GET">
					<h4>Theme</h4>
						<label>Which theme would you like to use</label>
						<select id="Themes" name="theme">
							<option value="red" <?php checkSelected('theme', 'red'); ?>>Red</option>
							<option value="blue" <?php checkSelected('theme', 'blue'); ?> >Blue</option>
						</select>
						
					<h4>Text Size</h4>
						<label>What style text would you like</label>
						<select id="TextSizes" name="textsize">
							<option value="120" <?php checkSelected('textsize', 120); ?> >120%</option>
							<option value="110" <?php checkSelected('textsize', 110); ?>>110%</option>
							<option value="100" <?php checkSelected('textsize', 100); ?>>100%</option>
							<option value="90" <?php checkSelected('textsize', 90); ?>>90%</option>
							<option value="80" <?php checkSelected('textsize', 80); ?>>80%</option>
						</select>
						
					<h4>Navigation Bar Position</h4>
					<label><input type="radio" name="navposition" value="left" <?php checkChecked('navpos', 'left') ?>>Left</label><br>
					<label><input type="radio" name="navposition" value="right" <?php checkChecked('navpos', 'right') ?>>Right</label><br>
					
					<input type="submit" value="Save Preferences">
					
				</form>
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
		
	</body>
</html>