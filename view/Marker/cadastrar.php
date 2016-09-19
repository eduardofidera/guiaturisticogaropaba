<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
			<h3>Cadastrar um marker</h3>
			<form name="cadastro" method="post">
				<div class="field">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" required>
				</div>

				<label for="lat">Posição no mapa</label>
				<input type="hidden" name="lat" id="lat" value="">
				<input type="hidden" name="longi" id="longi" value="">
				<div id="map">

					<script type="text/javascript">
// Criação do mapa
var map;
function initMap() {

	var garopaba = {lat: -28.024537, lng: -48.623806};

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

	// Valor do click no input do form e marker no mapa
	google.maps.event.addListener(map, 'click', function(event) {
	document.cadastro.lat.value = event.latLng.lat();
	document.cadastro.longi.value = event.latLng.lng();
		markercadastro = new google.maps.Marker({
			position: {lat: event.latLng.lat(), lng: event.latLng.lng()},
			map: map
	
		});
	});

}


	</script>
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
				</div>	
		
				<div class="field">
					<label for="categoria">Categoria: </label>
					<select name="categoria">
					<option value="1">Pousada</option>
					<option value="2">Restaurante</option>
					<option value="3">Praia</option>
					</select>
				</div>
		
				<div class="field">
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao" id="descricao" required>
				</div>
		
				<ul class="buttons">
					<li><input type="submit" value="Cadastrar" /></li>
				</ul>
			</form>
		</div>
	</div>
</section>