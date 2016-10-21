<section id="detalhes">
<header class="special container">
					<?php 
						foreach ($markers as $marker) {
							echo "<h2><strong>$marker->nome</strong> </h2>";
							echo "<p> $marker->descricao </p>";
							
							foreach ($imagens as $imagem) {
								if ($imagem->idMarker == $marker->id) {
									echo "<img src='$imagem->local' height='42' width='42'>";
								}
							}
						}
					?>
			

</header>
</section>