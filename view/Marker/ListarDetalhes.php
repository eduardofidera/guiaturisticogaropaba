<section id="detalhes">
<header class="special container">
					<?php
						foreach ($marker as $thismarker) {
							echo "<h2><strong>$thismarker->nome</strong> </h2>";
							echo "<p> $thismarker->descricao </p>";

							foreach ($imagens as $imagem) {
								if ($imagem->idMarker == $thismarker->id) {
									echo "<img src='$imagem->local' height='42' width='42'>";
								}
							}
						}
					?>

					
</header>
</section>
