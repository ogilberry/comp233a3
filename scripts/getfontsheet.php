<?php
	$suffix = (string)$_COOKIE['textsize'];
	$stylesheet = "font".$suffix.".css";
	$output = '<link rel="stylesheet" type="text/css" href="../stylesheets/'.$stylesheet.'">';
	echo $output;
?>