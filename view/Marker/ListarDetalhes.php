<section id="metodolistardetalhes" class="wrapper style4 container">
	<div class="row 150%">
		
					<?php
						foreach ($marker as $thismarker) {
							echo "<header class='headerdetalhes'>";
							echo "<strong>$thismarker->nome</strong>";
							echo "<p> $thismarker->descricao </p>";
							echo "</header>";
					
							foreach ($imagens as $imagem) {
								if ($imagem->idMarker == $thismarker->id) {
									echo "<img src='$imagem->local' class='imagemdetalhes'>";
								}
							}
						}
					?>
		
	</div>
</section>
