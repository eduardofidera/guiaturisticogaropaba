<!DOCTYPE HTML>
<html>
	<head>
		<title>Guia Turístico</title>
		<link rel="shortcut icon" href="images/logo.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main1.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<body class="index">
		<div id="page-wrapper">	
			<!-- Header -->
			<header id="header" class="alt">
				<a href="index.php" style="color:#fff;"><img src="images/logo.png" class="logo1"></img>Guia Turístico GAROPABA</a>

					<nav id="nav">

						<ul>
							<li class="current"><a href="#main">HOME</a></li>						
						</ul>


					</nav>
			</header>
						
				<div id="banner">
				</div>
				<article id="main">
					<!-- The Modal -->

					<div class="3u 12u(narrower)">
					<div id="myModal" class="modal">
						<!-- Modal content -->
							<div class="modal-content">
								<span class="close">x</span>
								<div id="content">
								
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
 									data-share="false"
 									data-width="400"
  									data-show-faces="false">
								</div>
								
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
						function press (){
									document.getElementById('myModal').style.display = "block";
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
		    <script src="assets/js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
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