<?php
	require_once('config.php');
	
	// apenas um usuario
	$root = new Usuario();
	$root->loadById(1);
	echo $root;
	echo PHP_EOL."============".PHP_EOL;

	// lista de usuarios
	$lista = Usuario::getList();
	echo json_encode($lista);
	echo PHP_EOL."============".PHP_EOL;

	// busca de usuarios
	$search = Usuario::search("n");
	echo json_encode($search);
	echo PHP_EOL."============".PHP_EOL;	

	// login
	$usuario =  new Usuario();
	$usuario->login("nome 2","321");
	echo "RETORNA LOGIN: " . $usuario;
	echo PHP_EOL."============".PHP_EOL;		
?>