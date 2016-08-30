<section>
<?php
foreach($markers as $marker){
	 echo $marker->nome;
	 echo $marker->lat;
	 		echo '<br>';
	for ($i=0;$i<6;$i++){
	 	for ($o=0; $o<6;$o++){
	 		echo '<script>';
	 		echo 'var markers['.$i.']['.$o.']= $marker->id';
	 		echo 'var markers['.$i.']['.$o.']= $marker->nome';
	 		echo 'var markers['.$i.']['.$o.']= $marker->lat';
	 		echo 'var markers['.$i.']['.$o.']= $marker->longi';
	 		echo 'var markers['.$i.']['.$o.']= $marker->categoria';
	 		echo 'var markers['.$i.']['.$o.']= $marker->descricao';
	 		echo '</script>';
		}
	}
}
?>
<div id="map" style="height:500px; width:100%; position:relative;">
<script type="text/javascript">
alert(markers[1][2]);
var map;
function initMap() {

var garopaba = {lat: -28.024537, lng: -48.623806};

  map = new google.maps.Map(document.getElementById('map'), {
    center: garopaba,
    zoom: 13
 });

	markersnome = new google.maps.Marker({
    position: {lat: -28.024537, lng: -48.623806},
    map: map
});
    markersilveira = new google.maps.Marker({
    	position: {lat:markers[1][2], lng:markers[1][3]};
    	map:map
  });
}

 </script>

					



  
  <!-- google.maps.event.addListener(marker,'click',function() {
  document.getElementById("title").innerHTML = "hello";
    document.getElementById("info").innerHTML = "informações sobre o marker";
  infowindow.open(map,marker);
  }); -->
  
					
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPH9u0Vnivgf75V_IhVAeFtF11_t77Smw&callback=initMap">
					</script>
				</div>
			</section>