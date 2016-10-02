<?php
	
	echo'<div class="navpos">
			<nav>
				<div class="navbardiv">
					<!--nav bar is just a list of links/buttons-->
					<ul class="navbar">
						<li class="navbuttonli"><a class="navbuttona" href="../index.php">Home</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pageone.php">Page One</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pagetwo.php">Page Two</a></li>
						<li class="navbuttonli"><a class="navbuttona" href="../pages/pagethree.php">Page Three</a></li>';
						if($_COOKIE['loggedin']==0){
							echo '<li class="navbuttonli"><a class="navbuttona" href="../pages/login.php">Log in</a></li>';
						}
	
						else{
							echo '<li class="navbuttonli"><a class="navbuttona" href="../pages/preferences.php">Preferences</a></li>
									  <li class="navbuttonli"><a class="navbuttona" href="../pages/logout.php">Log out</a></li>';
						}
	echo'				</ul>
				</div>
			</nav>				
		</div>';
	
?>