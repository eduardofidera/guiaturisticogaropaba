<section>
<?php 
	foreach ($markers as $marker) {
		$a[] = $marker->nome;
	}
	echo $a[1];
?>

 

				<div id="map" style="height:500px; width:100%; position:relative;">
				<script type="text/javascript">
				alert(a[1]);
var map;
function initMap() {
var garopaba = {lat: -28.024537, lng: -48.623806};
  map = new google.maps.Map(document.getElementById('map'), {
    center: garopaba,
    zoom: 13
 });

 

	markers.nome = new google.maps.Marker({
    position: {lat: -28.024537, lng: -48.623806},
    map: map
	
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