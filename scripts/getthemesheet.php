<?php
	$suffix = $_COOKIE['theme'];
	$stylesheet = $suffix."theme.css";
	$output = '<link rel="stylesheet" type="text/css" href="../stylesheets/'.$stylesheet.'">';
	echo $output;
?>