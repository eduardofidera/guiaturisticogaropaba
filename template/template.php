<!DOCTYPE HTML>
<html>
	<head>
		<title>Garopaba Turismo e Transporte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php">Guia Turístico <span>Garopaba</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Início</a></li>
							<li class="submenu">
								<a href="#">Método</a>
								<ul>
									<li><a href="index.php?c=Marker&p=cadastrar">Cadastrar Marker</a></li>
									<li><a href="index.php?c=Marker&p=listar">Mapa</a></li>
								</ul>
							</li>
							<li><a href="#" class="button special">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">
						<header>
						<h2> Garopaba </h2>
						</header>
						<br />
						<p>A diversidade de pontos <strong>turísticos</strong> e
						<br />
						<strong>gastronômicos</strong> e <strong>hospedagem</strong>
						<br />
						<p>...
						<footer>
							<ul class="buttons vertical">
								<li><a href="#map" class="button fit scrolly">Ver mais</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
	<!-- Mapa -->
		<section class="wrapper style4 container">
			<div class="row 150%">
				<div class="8u 12u(narrower)">
		<!-- Content -->
		<div class="content">
			<?php 
		include $view;
		?>

		
								
			</div>
		</section>
				
			<!-- Footer -->
				<footer id="footer">
				
				

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="#map">Me</a></li>
					</ul>

				</footer>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>