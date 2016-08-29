<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
					<h1 id="logo"><a href="index.html">Guia Turístico <span>Garopaba</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Início</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li>
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
							<h2>Garopaba</h2>
						</header>
						<p>A diversidade de pontos <strong>turísticos</strong> e
						<br />
						<strong>gastronômicos</strong> e <strong>hospedagem</strong>
						<br />
						<p>para melhorar a sua viagem.
						<footer>
							<ul class="buttons vertical">
								<li><a href="#main" class="button fit scrolly">Ver mais</a></li>
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
			<section>
				<div id="map" style="height:500px; width:100%; position:relative;">
					<script type="text/javascript">
					
var map;
function initMap() {
var garopaba = {lat: -28.024537, lng: -48.623806};
  map = new google.maps.Map(document.getElementById('map'), {
    center: garopaba,
    zoom: 13
  });


var marker = new google.maps.Marker({
    position: {lat: -28.034537, lng: -48.623806},
	icon:'images/pousada.png',
    map: map
  });
var marker2 = new google.maps.Marker({
    position: garopaba,
    map: map,
    icon:'images/praia.png'
  });
var	marker3 = new google.maps.Marker({
    position: {lat: -28.014537, lng: -48.623806},
    map: map,
    icon:'images/restaurante.png'
  });
  
  
  var infowindow = new google.maps.InfoWindow({
  content:"Título"
  });
  google.maps.event.addListener(marker,'click',function() {
  document.getElementById("title").innerHTML = "hello";
    document.getElementById("info").innerHTML = "informações sobre o marker";
  infowindow.open(map,marker);
  });
  
  google.maps.event.addListener(marker2,'mouseover',function() {
  document.getElementById("title").innerHTML = "marker2";
    document.getElementById("info").innerHTML = "informações sobre o marker2";
  infowindow.open(map,marker2);
  });
  
  google.maps.event.addListener(marker3,'click',function() {
  document.getElementById("title").innerHTML = "marker3";
  document.getElementById("info").innerHTML = "informações sobre o marker3";
  infowindow.open(map,marker3);
  });
  }
  

					</script>
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
				</div>
			</section>
			<div id="title" style="padding-top:5px; font-size: 1.15em; letter-spacing: 0.025em;color: inherit;font-weight: 300;line-height: 1.75em;margin-bottom: 0.5em;text-transform: uppercase;">
			</div>
			
			<div id="info">
			</div>
		</div>

	</div>
								<div class="4u 12u(narrower)">

									<!-- Opções -->
										<div class="sidebar">
											<section>
												<header>
													<h3>O que você procura?</h3>
												</header>
												<footer>
													<ul class="buttons">
														<li><a href="#" class="button small">Pousadas</a></li>
													</ul>
													<ul class="buttons">
														<li><a href="#" class="button small">Hotéis</a></li>
													</ul>
													<ul class="buttons">
														<li><a href="#" class="button small">Praias</a></li>
													</ul>
													<ul class="buttons">
														<li><a href="#" class="button small">Restaurantes</a></li>
													</ul>
												</footer>
											</section>
										</div>

				</div>
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
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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