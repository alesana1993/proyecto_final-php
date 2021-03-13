<?php 
	session_start();

	if (!isset($_SESSION['usu'])) {
		header("location:startSession.php");
	}

 ?>

<!DOCTYPE html>
<html lang="an">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Primeira pagina com html,css e javascript</title>
	<link rel="stylesheet" href="css/paramore.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<header class="header" id="exit">
		<img src="img/bx-exit.svg" alt="" class="exit">
		<nav class="exit">
	<header class="header" id="inicio">
		<img src="img/cardapio.svg" alt="" class="cardapio">
		<nav class="menu-navegacion">
			<a href="#inicio">Inicio</a>
			<a href="#Servicio">Servicio</a>
			<a href="#Portafolio">Portafolio</a>
			<a href="#Expertos">Expertos</a>
			<a href="#Contactos">Contactos</a>
		</nav>
		<div class="contenedor head">
			<h1 class="titulo">Bem-vindo, esta é sua primeira página web no site.</h1>
			<p class="copy">Sabes disso, verdade?....com certeza.</p>
		</div>
	</header>
	<main>
		<section class="contenedor" id="Servicio">
			<h2 class="subtitulo">Nuestro Servicio</h2>
			<div class="contenedor-servicio">
				<img src="img/wonder.svg" alt="">
				<div class="wonder-servicio">
					<div class="service">
					    <h3 class="n-service"><span class="number">1</span>Desenho web</h3>
					    <p>Tantas emociones que has causado en mi,
						 y en verdad es muy animador sentir eso en verdad. Tal vez yo no sepa donde ir.
						  Pero si pudiera una mañana abrir los ojos y ver los tuyos sabría donde quedarme</p>
					</div>
					<div class="service">
					    <h3 class="n-service"><span class="number">2</span>Desenho web</h3>
					    <p>Tantas emociones que has causado en mi, 
						y en verdad es muy animador sentir eso en verdad. Tal vez yo no sepa donde ir.
						 Pero si pudiera una mañana abrir los ojos y ver los tuyos sabría donde quedarme</p>
					</div>
					<div class="service">
					    <h3 class="n-service"><span class="number">3</span>Desenho web</h3>
					    <p>Tantas emociones que has causado en mi, 
						y en verdad es muy animador sentir eso en verdad. Tal vez yo no sepa donde ir. 
						Pero si pudiera una mañana abrir los ojos y ver los tuyos sabría donde quedarme</p>
					</div>
		</section>
		<section class="gallery" id="Portafolio">
			<div class="contenedor">
				<h2 class="subtitulo">Galeria</h2>
				<div class="contenedor-galeria">
					<img src="img/300.jpg" alt="" class="img-galeria">
					<img src="img/2012.jpg" alt="" class="img-galeria">
					<img src="img/braveheart.jpg" alt="" class="img-galeria">
					<img src="img/inmortales.jpg" alt="" class="img-galeria">
					<img src="img/ryan.jpg" alt="" class="img-galeria">
					<img src="img/the-happening.jpg" alt="" class="img-galeria">
					<img src="img/the-hurt-locker" alt="" class="img-galeria">
					<img src="img/tron.jpg" alt="" class="img-galeria">
					<img src="img/yo-robot.jpg" alt="" class="img-galeria">
                </div>
			</div>
		</section>
		<section class="imagen-light">
			<img src="img/fechar.svg" alt="" class="close">
			<img src="img/galaxy.jpg" alt="" class="agregar-imagen">
		</section>
        <section class="contenedor" id="Expertos">
        	<h2 class="subtitulo">expertos en:</h2>
        	<section class="experts">
        		<div class="cont-expert">
        			<img src="img/ela1.svg" alt="">
        			<h3 class="n-expert">Analytics</h3>
        		</div>
        		<div class="cont-expert">
        			<img src="img/ela2.svg" alt="">
        			<h3 class="n-expert">Seo</h3>
        		</div>
        		<div class="cont-expert">
        			<img src="img/ela3.svg" alt="">
        			<h3 class="n-expert">Security</h3>
        		</div>
        	</section>
        </section>		
	</main>
	<footer id="contacto">
		<div class="contenedor footer-content">
		<div class="contact-us">
			<h2 class="brand">shisui</h2>
			<!--<p>vas a lograr tus sueños</p>-->
		</div>
		<div class="social-media">
			<a href="./" class="social-media-icon">
			   <i class='bx bxl-facebook' ></i>
			</a>
			<a href="./" class="social-media-icon">
			   <i class='bx bxl-youtube'></i>
			</a>
			<a href="./" class="social-media-icon">
				<i class='bx bxl-whatsapp' ></i>
			</a>
		</div>
		<div class="line"></div>
	</footer>
	<script src="js/menu.js"></script>
	<script src="js/lightbox.js"></script>
    
</body>
</html>