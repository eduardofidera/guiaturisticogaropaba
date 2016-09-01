<section class="wrapper style4 container">
	<div class="row 150%">
		<div class="8u 12u(narrower)">
			<h3>Cadastrar um marker</h3>
			<form method="post">
				<div class="field">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" required>
				</div>

				<div class="field">
					<label for="lat">Latitude</label>
					<input type="text" name="lat" id="lat" required>
				</div>
		
				<div class="field">
					<label for="longi">Longitude</label>
					<input type="text" name="longi" id="longi" required>
				</div>
		
				<div class="field">
					<label for="categoria">Categoria</label>
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