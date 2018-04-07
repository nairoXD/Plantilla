<?php
session_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$correo=$_POST['correo'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$errores=array(0);

if ($nombre=="") {
    $errores[]=true;
    $_SESSION{'error1'}="Rellene este campo";
}
if ($apellido=="") {
    $errores[]=true;
    $_SESSION{'error2'}="Rellene este campo";
}
if ($numero=="") {
    $errores[]=true;
    $_SESSION{'error3'}="Rellene este campo";
}
if ($correo=="") {
    $errores[]=true;
    $_SESSION{'error4'}="Rellene este campo";
}
if ($asunto=="") {
    $errores[]=true;
    $_SESSION{'error5'}="Rellene este campo";
}
if ($mensaje=="") {
    $errores[]=true;
    $_SESSION{'error6'}="Rellene este campo";
}

if (count($errores)>1) {
header('location:index.php#form');
}
?>



<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Envio Exitoso</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Developers_NairoXD</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Enviado</h2>
					<p><?php 
					echo "<label>Nombres:</label>".$_POST['nombre']."<br>"; 
		  echo "<label>Apellidos:</label>".$_POST['apellido']."<br>";
		  echo "<label>Telefono:</label>".$_POST['numero']."<br>";
		  echo "<label>Correo:</label>".$_POST['correo']."<br>"; 
		   echo "<label>Asunto:</label>".$_POST['asunto']."<br>"; 
		    echo "<label>Mensaje:</label>".$_POST['mensaje']."<br>"; 
		    ?>	
		  </p>
				</header>
				
						
					<hr class="major" />
					

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					
						
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
