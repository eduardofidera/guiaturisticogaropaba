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
	
}

// Método do mapa com todos os markers
function maptudo () {
	<?php
			echo "var markers = new Array();";
			foreach ($markers as $marker) {
			
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
			
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
			echo "vex.open({
	unsafeContent: '$marker->nome <br /> <a href=https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi target=_blank>Como chegar</a> <br /> <a href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id#detalhes target=_blank> Mais detalhes</a>',
	showCloseButton: true,
	placeholder: 'Ola',
	className: 'vex-theme-flat-attack'
})";
				
			echo "});";
			
		}
	
?>
}

// Método do mapa com markers na categoria 1
function map1 () {
	<?php
			echo "var markers = new Array();";
			foreach ($markers as $marker) {
			if ($marker->categoria == 1) {
			// Instanciar usando o id
			echo "markers[$marker->id] = new google.maps.Marker({";
			
    		echo "position: {lat: $marker->lat, lng: $marker->longi},";
			echo "icon: 'images/pousada.png',";
    		echo "map: map";
			
			echo "});";
			
				
					
			// Quando clicar no marker
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
			echo "vex.open({
	unsafeContent: '$marker->nome <br /> <a href=https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi target=_blank>Como chegar</a> <br /> <a href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id#detalhes target=_blank> Mais detalhes</a>',
	showCloseButton: true,
	placeholder: 'Ola',
	className: 'vex-theme-flat-attack'
})";
				
			echo "});";
			}
		}
	
?>
}

// Método do mapa com markers na categoria 2
function map2 () {
	<?php
			echo "var markers = new Array();";
			foreach ($markers as $marker) {
			if ($marker->categoria == 2) {
			// Instanciar usando o id
			echo "markers[$marker->id] = new google.maps.Marker({";
			
    		echo "position: {lat: $marker->lat, lng: $marker->longi},";
			echo "icon: 'images/restaurante.png',";
    		echo "map: map";
			
			echo "});";
			
				
					
			// Quando clicar no marker
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
			echo "vex.open({
	unsafeContent: '$marker->nome <br /> <a href=https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi target=_blank>Como chegar</a> <br /> <a href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id#detalhes target=_blank> Mais detalhes</a>',
	showCloseButton: true,
	placeholder: 'Ola',
	className: 'vex-theme-flat-attack'
})";
				
			echo "});";
			}
		}
	
?>
}

// Método do mapa com markers na categoria 3
function map3 () {
	<?php
			echo "var markers = new Array();";
			foreach ($markers as $marker) {
			if ($marker->categoria == 3) {
			// Instanciar usando o id
			echo "markers[$marker->id] = new google.maps.Marker({";
			
    		echo "position: {lat: $marker->lat, lng: $marker->longi},";
			echo "icon: 'images/praia.png',";
    		echo "map: map";
			
			echo "});";
			
				
					
			// Quando clicar no marker
			echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
			echo "vex.open({
	unsafeContent: '$marker->nome <br /> <a href=https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi target=_blank>Como chegar</a> <br /> <a href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id#detalhes target=_blank> Mais detalhes</a>',
	showCloseButton: true,
	placeholder: 'Ola',
	className: 'vex-theme-flat-attack'
})";
				
			echo "});";
			}
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
									<li><button onclick="initMap(), maptudo()" class="button small"><h1>Mostrar tudo</h1></button>
								</ul>
								<ul class="buttons">
									<li><button onclick="initMap(), map1()" class="button small"><h1>Pousadas e hotéis</h1></button>
								</ul>	
								<ul class="buttons">
									<li><button onclick="initMap(), map2()" class="button small"><h1>Comida</h1></button>
								</ul>
								<ul class="buttons">
									<li><button onclick="initMap(), map3()" class="button small"><h1>Praias e <br /> pontos turísticos</h1></button>
								</ul>				
							</footer>
						</section>
					</div>

		</div>
	</div>
</section>
	
				
