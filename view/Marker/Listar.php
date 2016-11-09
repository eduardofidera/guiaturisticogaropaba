﻿
<section class="wrapper style4 container">
	<section id="metodolistar">
	<div class="row 150%">
	<?php
			include 'Listar.botoes.php';
		?>
		<div class="9u 12u(narrower)">
			
		
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
		var modal = document.getElementById('myModal');
	var content = document.getElementById('content');
	var span = document.getElementsByClassName('close')[0];
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
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
			
			// Quando clicar no marker
			include 'Listar.markerclick.php';
			
		}
	
?>
}

// Método do mapa com markers na categoria 1
function map1 () {
	var modal = document.getElementById('myModal');
	var content = document.getElementById('content');
	var span = document.getElementsByClassName('close')[0];
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
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
			include 'Listar.markerclick.php';
			}
		}
	
?>

}

// Método do mapa com markers na categoria 2
function map2 () {
	var modal = document.getElementById('myModal');
	var content = document.getElementById('content');
	var span = document.getElementsByClassName('close')[0];
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
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
			include 'Listar.markerclick.php';
			}
		}
	
?>
}

// Método do mapa com markers na categoria 3
function map3 () {
	var modal = document.getElementById('myModal');
	var content = document.getElementById('content');
	var span = document.getElementsByClassName('close')[0];
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
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
			include 'Listar.markerclick.php';
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
		
		<script type="text/javascript">
		function detalhes (){
			document.getElementById('detalhes').innerHTML = '';
			<?php
			foreach ($markers as $marker) {
				include 'Listar.detalhes.php';
			}
			?>
		}
		
		function detalhes1() {
			document.getElementById('detalhes').innerHTML = '';
			<?php
			foreach ($markers as $marker) {
				if ($marker->categoria == 1) {
				include 'Listar.detalhes.php';
			}
			}
			?>
		}
		
		function detalhes2() {
			document.getElementById('detalhes').innerHTML = '';
			<?php
			foreach ($markers as $marker) {
				if ($marker->categoria == 2) {
					include 'Listar.detalhes.php';
				}
			}
			?>
		}
		
		function detalhes3() {
			document.getElementById('detalhes').innerHTML = '';
			<?php
			foreach ($markers as $marker) {
				if ($marker->categoria == 3) {
				include 'Listar.detalhes.php';
					}
				}
			?>
		}
		
		
		
		</script>
		<div class="8u 12u(narrower)">
			<div id="detalhes">

			</div>
		</div>
		
	</div>
	</section>
</section>
	
				
