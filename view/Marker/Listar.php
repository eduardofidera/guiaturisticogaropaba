<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
		
			<section id="map">
				<div id="map">

					<script type="text/javascript">
var map;
function initMap() {

var garopaba = {lat: -28.024537, lng: -48.623806};

  map = new google.maps.Map(document.getElementById('map'), {
    center: garopaba,
    zoom: 13
 });

		<?php
			foreach ($markers as $marker) {
			// Instanciar o marker
			echo "var markers = new Array();";
			// Instanciar usando o id
			echo "markers[$marker->id] = new google.maps.Marker({";

			
    		echo "position: {lat: $marker->lat, lng: $marker->longi},";
			if ($marker->categoria == 1) {
				echo "icon: 'images/pousada.png',";
			} elseif ($marker->categoria == 2) {
				echo "icon: 'images/restaurante.png',";
			} elseif ($marker->categoria == 3) {
				echo "icon: 'images/praia.png',";
			}
    		echo "map: map";
			
			echo "});";
			
			// Detalhes do marker
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
			echo "document.getElementById('titulo').innerHTML = '<h3>$marker->nome</h3>',";
			echo "document.getElementById('descricao').innerHTML = 'Descrição: $marker->descricao'";
			
			echo "});";
		}
?>

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

<section class="wrapper style2 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
	
	<!-- Detalhes do marker -->
	<section id="detalhes">
		<header id="titulo">
		<span class="icon fa-bar-chart-o"></span>
		</header>
		
		<div id="descricao">
		
		</div>
	</section>
	
		</div>
	</div>
</section>
	
				
