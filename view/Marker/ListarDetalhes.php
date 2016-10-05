<section id="detalhes">
<header class="special container">
						<span class="icon fa-bar-chart-o"></span>
			
					<?php 
						foreach ($markers as $marker) {
							echo "<h2><strong>$marker->nome</strong> </h2>";
							echo "<p> $marker->descricao </p>";
						}
					?>
				</ul>

</header>
</section>