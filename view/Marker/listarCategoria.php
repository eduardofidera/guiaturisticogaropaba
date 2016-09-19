<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
		
			<section id="map">
				<div id="map">

					<script type="text/javascript">
// Criação do mapa
var map;
function initMap() {
var garopaba = {lat: -28.024537, lng: -48.623806};

// Criar o mapa em Garopaba
map = new google.maps.Map(document.getElementById('map'), {
    center: garopaba,
    zoom: 13
});
 
	// Método marker you are here
	function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}
	function showPosition(position) {
    markerPosition = new google.maps.Marker ({
		position: {lat: position.coords.latitude, lng: position.coords.longitude},
		icon: 'images/posicao.png',
		map: map
	})
}
	getLocation();
	
		<?php

			echo "var markers = new Array();";
			foreach ($markers_categoria as $marker) {
			
			// Instanciar usando o id
			echo "markers[$marker->id] = new google.maps.Marker({";
			
    		echo "position: {lat: $marker->lat, lng: $marker->longi},";
			// Ícone de acordo com a categoria
			if ($marker->categoria == 1) {
				echo "icon: 'images/pousada.png',";
			} elseif ($marker->categoria == 2) {
				echo "icon: 'images/restaurante.png',";
			} elseif ($marker->categoria == 3) {
				echo "icon: 'images/praia.png',";
			}
    		echo "map: map";
			
			echo "});";
			
				
			// Request de rota
			echo "var request = {
				origin: '{lat: $marker->lat, lng: $marker->longi}', 
					destination: 'Garopaba',
					travelMode: google.maps.DirectionsTravelMode.DRIVING
					};";
					
			// Quando clicar no marker
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
				// Nome
				echo "document.getElementById('titulo').innerHTML = '<h3>$marker->nome</h3>',";
				
				// Descrição
				echo "document.getElementById('descricao').innerHTML = 'Descrição: $marker->descricao'";
				
				

			echo "});";
			
		}
	
?>


				/*directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
				directionsDisplay.setDirections(response);
				}
				}); */




}
	
					</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
				</div>	
			</section>
		</div>
			<div class="4u 12u(narrower)">

					<!-- Opções -->
					<div class="sidebar">
						<section id="opcoes">
							<header>
								<h3>O que você procura?</h3>
							</header>
							<footer>
								<ul class="buttons">
									<li><a href="index.php?c=Marker&p=listarCategoria&categoria=1" class="button small">Pousadas/Hotéis</a></li>
								</ul>	
								<ul class="buttons">
									<li><a href="index.php?c=Marker&p=listarCategoria&categoria=2" class="button small">Comida</a></li>
								</ul>
								<ul class="buttons">
									<li><a href="index.php?c=Marker&p=listarCategoria&categoria=2" class="button small">Praias e <br />
									Pontos Turísticos</a></li>
								</ul>				
							</footer>
						</section>
					</div>

			</div>
	</div>
</section>

<section class="wrapper style2 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
	
	<!-- Detalhes do marker -->
	<section id="detalhes">
		<header id="titulo">
		</header>
		
		<div id="descricao">
		
		</div>
		<div id="imagem">
		
		</div>
		
	</section>
	
		</div>
	</div>
</section>
	
				
