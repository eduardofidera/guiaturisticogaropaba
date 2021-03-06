<?php
class MarkerController{
	public function cadastrar(){
		$nome = filter_input(INPUT_POST, 'nome');
		$lat = filter_input(INPUT_POST, 'lat');
		$longi = filter_input(INPUT_POST, 'longi');
		$categoria = filter_input(INPUT_POST, 'categoria');
		$descricao = filter_input(INPUT_POST, 'descricao');

		if ($nome){
						# o formulario foi enviado
			$a = new Marker();
			$a->nome = $nome;
			$a->lat = $lat;
			$a->longi = $longi;
			$a->categoria = $categoria;
			$a->descricao = $descricao;
			$a->save();
			header("Location: index.php?c=Marker&p=listar");
		}
		$view = 'view/Marker/Cadastrar.php';
		include 'template/template.php';
	}

	public function listar(){
		$markers = Marker::listar();
		$imagens = Imagem::listar();
		$view = 'view/Marker/Listar.php';
		include 'template/template.php';
	}

	public function listarDetalhes() {
		$marker = Marker::listar();
		$imagens = Imagem::listar();
		$view = 'view/Marker/ListarDetalhes.php';
		include 'template/template.php';
	}
}
?>
