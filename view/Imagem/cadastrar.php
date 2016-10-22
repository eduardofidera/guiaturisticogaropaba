<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
			<h3>Cadastrar imagem</h3>

			<form enctype="multipart/form-data" name="cadastro" method="post">
				<div class="field">
					<label for="local">local</label>
					<input type="text" name="local" id="local" required>
				</div>

				<div class="field">
					<label for="idMarker">nome marker: </label>
					<select name="idMarker">
            <option value="2">Praia da Vigia</option>;
            <?php
            foreach ($markers as $marker){
                echo '<option value="'.$marker->id.'">'.$marker->nome.'</option>';
              }
                ?>
					</select>
				</div>

				<ul class="buttons">
					<li><input type="submit" value="Cadastrar" /></li>
				</ul>
			</form>
		</div>
	</div>
</section>
