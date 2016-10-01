<!DOCTYPE html>
<html>
	<head>
		<title>PHP and cookies</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../stylesheets/mystyle.css">
	</head>
	
	
	<body>
	
		<div class = "header">
			<h1 class="headeritem" id="headertitle">COMP233 Assignment 3 - PHP and cookies</h1>
		</div>
		
		<div class="contentpos">
			<div class="maincontent">
			
				<h2>Preferences</h2>
				<form>
					<h4>Theme</h4>
						<label>Which theme would you like to use</label>
						<select id="Themes" name="theme">
							<option value="red" selected>Red</option>
							<option value="blue">Blue</option>
						</select>
						
					<h4>Text Size</h4>
						<label>What style text would you like</label>
						<select id="TextSizes" name="textsize">
							<option value="120">120%</option>
							<option value="110">110%</option>
							<option value="100" selected>100%</option>
							<option value="90">90%</option>
							<option value="80">80%</option>
						</select>
						
					<h4>Navigation Bar Position</h4>
					<label><input type="radio" name="navposition" value="Left">Left</label><br>
					<label><input type="radio" name="navposition" value="Right" checked="checked">Right</label><br>
					
					<input type="submit" value="Save Preferences">
					
				</form>
			</div>
		</div>
		
		<div class="navpos">
			<nav>
				<div class="navbardiv">
					<!--nav bar is just a list of links/buttons-->
					<ul class="navbar">
						<li class="navbuttonli"><a class="navbuttona" href="../index.php">Home</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pageone.php">Page One</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pagetwo.php">Page Two</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pagethree.php">Page Three</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/login.php">Log in</a></li>
					</ul>
				</div>
			</nav>
				
		</div>
		
	</body>
</html>