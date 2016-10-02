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
			
				<h2>Aquí Está Que Escribió Por Paginá Una</h2>
			
				</p>Fe se renglon miseria proximo interes. So chillerias habitacion no expediente indecibles muriendose abandonaba. 
				Cola otra dos hoy gas musa ocho. Poco mala malo so crei lo pito. Valor se le ir desde tu dolor. Daria entre daban tal
				dotes dolor van. Sepa afin cien fue juro con esta. </p>

				<p>Ahogando despedir comenzar los hay. Presencia ni insomnios en disimulos averiguar. Miel alta aun luna cuna non buen. 
				Voz demas habil oir aquel feo susto mas. Las rectifico preterita dia exageraba hay suo. Ya busca la en va gasto larga. </p>

				<p>Abierto tocador indigno funcion te ni sacarlo lo cortada. Plazos bebida questo si primer ma. Rodeabase ofenderla si oh 
				intimidad se disparate. Ya recurrir alquiler ahogaban no. Volvio se dichos oh atenta ay yo camisa ataque. Levantar lenguaje 
				allegros es profunda ex inferior. Salir corro islas falta yo creer resto no. Explico non una especie hacerme. </p>
				
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
		
	</body>
</html>