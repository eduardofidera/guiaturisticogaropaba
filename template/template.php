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
  	function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
  	status: true,
    appId      : '{1187862927918347}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
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
								<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
								</fb:login-button>
								
								<div 
									style="padding-top: 1.25em"
 									class="fb-like"
 									data-share="true"
 									data-width="300"
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