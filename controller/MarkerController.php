<?php
class MarkerController{
	public function add(){
		$nome = filter_input(INPUT_POST,, 'nome');
				$lat = filter_input(INPUT_POST,, 'lat');
						$longi = filter_input(INPUT_POST,, 'longi');
								$categoria = filter_input(INPUT_POST,, 'categoria');
																$descricao = filter_input(INPUT_POST,, 'categoria');
		if ($nome){
						# o formulario foi enviado
			$a = new Marker();
			$a->nome = $nome;
						$a->lat = $lat;
									$a->longi = $longi;
												$a->categoria = $categoria;
																			$a->descricao = $descricao;
			$t->save();
			header("Location: index.php?c=Marker&p=listar");
		}
		$view = 'view/Markers/cadastrar.php';
		include 'template/template.php';

	}

}
?>