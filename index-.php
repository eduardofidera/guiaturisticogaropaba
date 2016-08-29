<?php

require 'lib/Db.php';
require 'model/Marker.php';
// require 'model/Rotas.php';

#controller de inicio
$controller = filter_input(INPUT_GET,'c');
# metodo de inicio (quando carregar a pag)
$metodo = filter_input(INPUT_GET, 'p');


if(!$controller){
	# página inicial do site	
	require 'controller/MarkerController.php';
	$dc = new MarkerController();
	$dc->listar();
}
else{
	$controller .= 'Controller';
	require 'controller/'.$controller.'.php';
	$dc = new $controller;
	if ($metodo){
	$dc->$metodo();
	} else {
	header("Location:index.php?c=Marker&p=listar");
	}
}