<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
			
			<h2 style='border-bottom: 2px solid #83d3c9; '> Adicionar local </h2> <br />

			<form name="cadastro" method="post">
				<div class="field">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" required>
				</div>

				
				<div class="field">
				<label id="lat1">Latitude </label>
					<input type="text" name="lat" id="lat" value="Mover o marcador no mapa abaixo" readonly>
				</div>
				
				<div class="field">
				<label id="long1">Longitude </label>
					<input type="text" name="longi" id="longi" value="Mover o marcador no mapa abaixo" readonly>
				</div>
				
				
				<div id="map">

					<script type="text/javascript">
// Criação do mapa
var map;
function initMap() {

			//var garopaba = {lat: -28.024537, lng: -48.623806};

			/*map = new google.maps.Map(document.getElementById('map'), {
				center: garopaba,
				zoom: 13
			}); */
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
	var MyLatLng = new google.maps.LatLng(-26.856554, -49.1918094);
	// Criar o marker
		markercadastro = new google.maps.Marker({
			position: MyLatLng,
			icon: 'images/markercadastro.png',
			draggable: true,
			map: map
		});
		
	// Quando terminar de arrastar o marker
	google.maps.event.addListener(markercadastro, 'dragend', function(evt){	
			// Mudança no value do input
			document.getElementById('lat').value = evt.latLng.lat();
			document.getElementById('longi').value = evt.latLng.lng();
	});
		

}


	</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
					
				</div>	
		
				<div class="field">
					<label for="categoria">Categoria </label><br />
					<select name="categoria" class="select">
					<option value="1">Acomodação</option>
					<option value="2">Restaurante</option>
					<option value="3">Ponto turístico</option>
					</select>
				</div>
		
				<div class="field">
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao" id="descricao" required>
				</div>
		
				<ul class="buttons">
					<li><input type="submit" class="button special" value="adicionar" /></li>
				</ul>
			</form>
			
		</div>
	</div>
</section>