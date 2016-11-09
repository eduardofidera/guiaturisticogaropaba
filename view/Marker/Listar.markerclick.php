<?php 
	echo "google.maps.event.addListener(markers[$marker->id],'click',function() {";
	echo "content.innerHTML = '<a class=title href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id target=_blank> $marker->nome </a>      <p class=descricao> $marker->descricao </p>          <br />         <div class=dir> <img class=detalhesimg src=images/detalhes.png>     <a href=index.php?c=Marker&p=listarDetalhes&idmarker=$marker->id#detalhes target=_blank> Mais detalhes</a>             <br />       <img class=direimg src=images/directions.png> <a href=https://maps.google.com?saddr=Current+Location&daddr=$marker->lat,$marker->longi target=_blank>Como chegar</a>  </div>';";
	echo "modal.style.display = 'block';";
	echo "});";
?>