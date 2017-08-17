
<section class="wrapper style4 container">
	<section id="metodolistar">
	<div class="row 150%">
	<?php
			include 'Listar.botoes.php';
		?>
		<div class="9u 12u(narrower)">
			
		
			<section id="map">

					<script type="text/javascript">
// Criação do mapa
var map;
function initMap() {
//		var garopaba = {lat: -28.024537, lng: -48.623806};

		/*
		map = new google.maps.Map(document.getElementById('map'), {
			center: garopaba,
			zoom: 13
		});
		*/
	map = new google.maps.Map(document.getElementById('map'),{
		center: new google.maps.LatLng(0,0),
		zoom: 13
	});
 if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(function (position) {
         initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
         map.setCenter(initialLocation);
     });
 }
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
	
	var span = document.getElementsByClassName('close')[0];
	span.onclick = function() {
		document.getElementById('myModal').style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == document.getElementById('myModal')) {
			document.getElementById('myModal').style.display = "none";
		}
	}
	
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
			
			// Quando clicar no marker
			include 'Listar.markerclick.php';
			
		}
	
?>
}

// Método do mapa com markers na categoria 1 (acomodação)
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
			include 'Listar.markerclick.php';
			}
		}
	
?>

}

// Método do mapa com markers na categoria 2 (restaurantes)
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
			include 'Listar.markerclick.php';
			}
		}
	
?>
}

// Método do mapa com markers na categoria 3 (o que fazer)
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
			include 'Listar.markerclick.php';
			}
		}
	
?>
}
	
					</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
					
			
			</section>
			<a href="index.php?c=Marker&p=cadastrar" class="hidebutton"> Adicionar um local </a>
		</div>
<script>
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
	
				
