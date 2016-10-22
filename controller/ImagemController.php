<?php
class ImagemController{
  public function cadastrar(){
    include 'controller/MarkerController.php';
    $markers = Marker::listar();
    $local = filter_input(INPUT_POST, 'local');
    $idMarker = filter_input(INPUT_POST, 'idMarker');

		if ($local){
						# o formulario foi enviado
			$i = new Imagem();
			$i->local = $local;
			$i->idMarker = $idMarker;
			$i->save();
      header("Location: index.php?c=Marker&p=listar");
		}
		$view = 'view/Imagem/Cadastrar.php';
		include 'template/template.php';

  }

  public function listar(){
		$imagens = Imagem::listar();
		$view = 'view/Marker/Listar.php';
		include 'template/template.php';
	}

}
?>
