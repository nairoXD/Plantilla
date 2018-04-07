<?php

session_start();




?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Developers</title>
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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>My Professional Profile</h2>
					<p>It Is My Web Site </p>
					<ul class="actions">
						
						<li><a href="#one" class="button big alt">know more</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major"  >
					<h2>My studies are:</h2>
					<p>Below I will describe my most important studies</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box" >
								<img src="images/icono1.jpg">
								<h3 name="he">Technical in Arts</h3>
								<p>I studied graphic arts in my school, where I graduated as an arts technician.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<img src="images/icono2.jpg">
								<h3>System Technologist</h3>
								<p>I studied in the sena and culminate my career as a systems technologist</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<img src="images/icono3.jpg">
								<h3>systems Engineering</h3>
								<p>I studied at the unicuces university where I graduated as a system engineer.</p>
							</section>
						</div>
					</div>
				</div>
			</section>
			
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Developers_nairoXD</h2>
					<p>Remember to log in or register to upload your resume, in order to join the group of programmers.</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<h3>My Hobbies</h3>
								<p>In my free time I like to draw, program and play on my computer, as well as read programming and technology articles.</p>
								
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
								<h3>My Aspirations</h3>
								<p>My aspiration is to create a company of programmers to be recognized as the best in the world.</p>
								
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container" id="form">
					<div class="row">
						<div class="8u">
							<section>
								<h2>Thank you for entering my page</h2>
								<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<p>Always grateful with life.</p>
							</section>
						</div>
						<div class="4u" >
							<section>
								<form action="validacion.php" method="post">
								<h3>Formulario de Contacto</h3>
								<label>Nombre:</label>
								<input type="text" name="nombre" required=""><div class="error1"><?php if (isset($_SESSION{'error1'})) {
     																							 echo $_SESSION{'error1'};
    																						}else{
      																								echo "";
   																							 }
    																							unset($_SESSION{'error1'});  ?></div>
								<label>Apellido:</label>
								<input type="text" name="apellido" required=""><div class="error2"><?php if (isset($_SESSION{'error2'})) {
      echo $_SESSION{'error2'};
    }else{
      echo "";
    }
    unset($_SESSION{'error2'});  ?></div>
								<label>Telefono:</label>
								<input type="number" name="numero" required=""><div class="error3"><?php if (isset($_SESSION{'error3'})) {
      echo $_SESSION{'error3'};
    }else{
      echo "";
    }
    unset($_SESSION{'error3'});  ?></div>
								<label>Correo electronico:</label>
								<input type="text" name="correo" required=""><div class="error4"><?php if (isset($_SESSION{'error4'})) {
      echo $_SESSION{'error4'};
    }else{
      echo "";
    }
    unset($_SESSION{'error4'});  ?></div>
    							<label>Asunto:</label>
    							<input type="text" name="asunto" required=""><div class="error5"><?php if (isset($_SESSION{'error5'})) {
      echo $_SESSION{'error5'};
    }else{
      echo "";
    }
    unset($_SESSION{'error5'});  ?></div>
    							<label>Mensaje:</label>
    							<input type="text-area" name="mensaje" class="text" required=""><div class="error6"><?php if (isset($_SESSION{'error6'})) {
      echo $_SESSION{'error6'};
    }else{
      echo "";
    }
    unset($_SESSION{'error6'});  ?></div>

								<input type="submit" value="enviar">
									
								</form>
							</section>
							<hr />
							
						</div>
					</div>
				</div>
			</section>			
			
		<!-- Footer -->
			<footer id="footer">
				
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>