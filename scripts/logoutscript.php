<?php
	setcookie('loggedin', 0, time()+60*60*24*365, "/");
	header('Location: ../index.php');
?>