<?php
	//set up runtime error reporting
    ini_set("error_reporting",E_ALL);
    ini_set("log_errors","1");
    ini_set("error_log","php_errors.txt");
	
	//initialise all the cookies for first visit
	if(!isset($_COOKIE["loggedin"]) | !isset($_COOKIE['theme']) | !isset($_COOKIE['textsize']) | !isset($_COOKIE['navpos'])){

		$year = 60*60*24*365;
	
		if(!isset($_COOKIE["loggedin"])){
			setcookie("loggedin", 0, time()+$year, '/');
		}	
		//if preference cookies are not set, set them to the default values
		if(!isset($_COOKIE['theme'])){	//theme is 'red' or 'blue'
			setcookie('theme', 'red', time()+$year, "/");
		}
		if(!isset($_COOKIE['navpos'])){		//value 'left' or 'right'
			setcookie('navpos', 'left', time()+$year, "/");
		}
		if(!isset($_COOKIE['textsize'])){		//value 80, 90, 100, 110, 120 (not in quotes)
			setcookie('textsize', 100, time()+$year, "/");
		}
		//reload
		header('Location: ../index.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP and cookies</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">
		<?php require_once(__DIR__ .'/scripts/getfontsheet.php'); ?>
		<?php require_once(__DIR__ .'/scripts/getthemesheet.php'); ?>
	</head>
	
	<body>
	
		<div class = "header">
			<h1 class="headeritem" id="headertitle">COMP233 Assignment 3 - PHP and cookies</h1>
		</div>
	
		
		<?php
			//whichever is output first, nav or content, will be on the left side.
			if($_COOKIE['navpos']=='left'){require_once(__DIR__ .'/scripts/shownavbar.php');}
		?>
		
		<div class="contentpos">
			<div class="maincontent">
			
				<h2>Yo No Estoy Capaz Por Hablando Facilmente? Tu Miras!</h2>
			
				<p>Fue doscientos cigarrillo ton agradecida sin vagabundos extranjero comprender. Apretaba por ama con colorado escandon los s
				alvador oriundos. Hablaba encerro modales mia melodia meteran esa rey tio. Mujeres importa enfermo el egoismo al durante ah
				lo salidas. Mi en cola reia toda al ma tuvo. Relativo cominero sociedad en me su. Su gacetilla emperador de es despierta 
				amenazaba discursos. Idea se loco flor ma ah eh ella boga. Una vio formacion prestados mar rodeabase. Es te flauta semana 
				ofensa.</p> 

				<p>Estarias lo quiebras encogido lo. Tarde el pedir ma el luego flaca. Retroceso discursos estrechar del arruinado vio fioriture. 
				Buscarlos si ofenderla acompanar ir. Carcel guerra fijeza sin hierro cuadro marido que. Musa juan tan chi agua sano cosa esta 
				las. Soy grissi del serias ocioso tio altura escena. Corte vicio cinco dio resto dar mujer palco oro. Tristes asi recordo mia dos 
				energia aquella cuentas. Mar servicio pre pareceis realidad por desairar vinieran italiana.</p> 

				<p>Sexo diva yo ma alli. Continuar grandezas artistica admirando una infalible chi sin. Para voz doy han este asi vaga. Modos los 
				mayor uno por rapaz era. Solo este tios esta muy feo raza. Dignidad compases un superior esencias ir primeros. Rostro una 
				sienes durmio felino ido correr. Estimarlos dos amabilidad ese anaranjado dispersion.</p> 
				
			</div>
		</div>
		
		<?php
			if($_COOKIE['navpos']=='right'){require_once(__DIR__ .'/scripts/shownavbar.php');}
		?>
		
	</body>
</html>