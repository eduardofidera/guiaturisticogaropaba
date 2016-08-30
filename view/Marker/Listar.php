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

	marker = new google.maps.Marker({
    position: {lat: -28.024537, lng: -48.623806},
    map: map
});
}

 </script>

					



  
  <!-- google.maps.event.addListener(marker,'click',function() {
  document.getElementById("title").innerHTML = "hello";
    document.getElementById("info").innerHTML = "informa��es sobre o marker";
  infowindow.open(map,marker);
  }); -->
  
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
					
					
				</div>
				
			</section>
			
			</div>

	</div>
	
								<div class="4u 12u(narrower)">

									<!-- Opções -->
										<div class="sidebar">
											<section>
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