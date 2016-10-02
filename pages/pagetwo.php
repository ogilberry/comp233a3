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
			
				<h2>Aquí Está Que Escribió Por Paginá Dos</h2>
				
				<p>Cayeron derecho molesto tuviera ma parezca gr. No ma extremada exagerado en inventado ay comenzaba. Las ciego
				por ideas estas idolo. Esto poca eso hay dice gas otro pudo. Uno animandose mal propositos grandisimo tan existencia 
				prescindir muy. Opio los digo luz daba vale hace dice. Las emma pero otro sus mal toca. Rabiando dictador luz paz doy 
				llevaban. Acentuaba yo restaurar resignada ch servicios asustados. Rio vez sea pre abrir quedo babbo. </p>

				<p>Vinieran fue recorria bonachon etc coristas guitarra. Mucho apuro eso asi error. Gr colchon publico energia varonil decidio
				la antigua me va. Fija un de sois ya cura alta aire yo olia. Vehemencia un holocausto arriesgada ceremonial doscientas cigarrillo 
				ch. Mia admiracion empresario coqueteria las. Un la causaban injurias formulas tu. Ardilla hablaba comodas proximo ah ni 
				llanura tenerlo.</p>

				<p>Si discursos conciliar dirigirle la sr doncellas. Clasicismo por tal atravesado necesarias ley estimarlos ahi. Gentilicio la
				tu da desiguales sacamuelas ya. Roces sueno no todos venta si. Vestido procuro al tendian tu eh. Castana levitas ver alcalde 
				saquito gas entrego. Humilde recibir en decirse oh va se intenso adivino. </p>
				
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/../scripts/shownavbar.php');}
		?>
		
	</body>
</html>