<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Información</title>
		<link rel="shourtcut icon" type="image/x-icon" href="Images/sena.jpg">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Datos ingresados</a></h1>
					</div>	
			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main2">
			<div class="container">
				<div class="row">
				
					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section class="centro">
								<div class="info_datos">

								<?php
								$let="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
								$caracter="/^[&ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

								if($_POST['nom']=="" || $_POST['apell']=="" || $_POST['tel']=="" || $_POST['email']=="" || $_POST['mensaje']=="" || $_POST['asunto']==""){
										echo "<div>No se permite campos vacios</div>";
								}

								else{

									if(strpos($let, $_POST['tel']) || strpos($caracter, $_POST['tel'])){
										echo "<div>En el campo telefono solo pueden ir números</div>"; 
									}

									if(substr_count($_POST['email'],"@")<1) {
										echo "<div>Falta el @ en el campo correo</div>"; 
									}
									
									else{
										echo "<div>Nombre: ".$_POST['nom']."</div>";
										echo "<div>Apellido: ".$_POST['apell']."</div>";
										echo "<div>Telefono ".$_POST['tel']."</div>";
										echo "<div>Correo: ".$_POST['email']."</div>";
										echo "<div>Asunto: ".$_POST['mensaje']."</div>";
										echo "<div>Mensaje: ".$_POST['asunto']."</div>";
										echo "<div>Información enviada con exito</div>";
									}
								}

								?>

								<div class="volver"><b><a href="onecolumn.html">volver</a></b></div>
								</div> 
							</section>
						</div>
						
					<!-- /Content -->
				</div>
			</div>
		</div>

	<!-- Main -->

	<!-- Footer -->
		
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>