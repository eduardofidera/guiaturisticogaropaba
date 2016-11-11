<!DOCTYPE HTML>
<html>
	<head>
		<title>Garopaba Turismo e Transporte</title>
		<link rel="shortcut icon" href="images/logo.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
	<script>
	window.fbAsyncInit = function() {
    	FB.init({
    		appId		: '1187862927918347',
    		cookie		: true,
    		xfbml      : true,
   			version    : 'v2.8'
    	});
  	};
	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1187862927918347";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

   	FB.getLoginStatus(function(response) {
    	statusChangeCallback(response);
	});
	</script>
	<meta property="og:url"                content="http://guiaturisticogaropaba.epizy.com/" />
	<meta property="og:title"              content="Sistema de Mapeamento Turístico Garopaba" />
	<meta property="og:description"        content="Veja locais para visitar, comer e dormir.Integrado com Maps" />
	<meta property="og:image"              content="http://guiaturisticogaropaba.epizy.com/images/logo.png" />

		<div id="page-wrapper">	
			<!-- Header -->
				<header id="header" class="alt">
					<h1 style="font-size:2em"><a href="index.php"><img src="images/logo.png" class="logo1">Guia Turístico <span>Garopaba</span></a></h1>

					<nav id="nav">

						<ul>	
							<!-- <li class="current"><a href="index.php?c=Marker&p=listar">MAPA</a></li>
							<li class="submenu">
								<a href="#">Métodos</a>
								<ul>
									<li><a href="index.php?c=Marker&p=cadastrar">Cadastrar Marker</a></li>
								</ul>
							</li>
							-->
							<li>	
								<div id="fb-root"></div>

								<div 
									class="fb-login-button" 
									data-max-rows="1" 
									data-size="small"
									data-show-faces="false" 
									data-auto-logout-link="true">
								</div>

								<div 
 									class="fb-like"
 									data-share="true"
 									data-width="400"
  									data-show-faces="true">
								</div>
							</li>
							<li>
								
							</li>
						</ul>


					</nav>
				</header>
						
			<!-- Banner -->
				<section id="banner">
					</header>
				</section>

				<article id="main">
					<!-- The Modal -->

					<div class="3u 12u(narrower)">
					<div id="myModal" class="modal">
						<!-- Modal content -->
							<div class="modal-content">
								<span class="close">x</span>
								<div id="content">

								</div>
							</div>
					</div>
					</div>
					
					<!-- view -->
					<?php 
						include $view;
					?>

				</article>
				
			<!-- Footer -->
				<footer id="footer">
				<!-- links -->
					<script>			
						function link_github() {
    						window.open('https://github.com/eduardofidera/guiaturisticogaropaba', '_blank');
					}
						function link_google(){
							window.open('https://www.google.com', '_blank');
						}
					</script>

					<ul class="icons">
						<li><a newtab="yes" href="javascript:link_github()" class="icon circle fa-github"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy;Images by <a href="javascript:link_google()">Google</a></li>
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