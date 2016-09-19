<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
			<h3>Cadastrar um marker</h3>
			<form name="cadastro" method="post">
				<div class="field">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" required>
				</div>

				
				<div class="field">
				<label>Latitude: </label>
					<input type="text" name="lat" id="lat" value="">
				</div>
				
				<div class="field">
				<label>Longitude: </label>
					<input type="text" name="longi" id="longi" value="">
				</div>
				
				
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
	
	
	// Criar o marker
		markercadastro = new google.maps.Marker({
			position: garopaba,
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