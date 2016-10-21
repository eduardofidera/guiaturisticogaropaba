<?php
class MarkerImgController{
	public function cadastrar(){
		$idmarker = filter_input(INPUT_POST, 'idmarker');
		$local = filter_input(INPUT_POST, 'local');
		
		if ($idmarker){
						# o formulario foi enviado
			$a = new MarkerImg();
			$a->idmarker = $idmarker;
			$a->local = $local;
			$a->save();
			header("Location: index.php?c=Marker&p=listar");
		}
		$view = 'view/Marker/cadastrar.php';
		include 'template/template.php';
	}

	public function listar(){
		$imagens = MarkerImg::listar();
		$view = 'view/Marker/listar.php';
		include 'template/template.php';
	}
}
?>