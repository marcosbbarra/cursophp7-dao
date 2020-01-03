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
	$usuario->login("root","teste");
	echo "RETORNA LOGIN: " . $usuario;
	echo PHP_EOL."============".PHP_EOL;	

	// insert
	$aluno =  new Usuario("aluno 2","444333");
	$aluno->insert();
	echo $aluno;
	echo PHP_EOL."============".PHP_EOL;	

	// update
	$usuario_up =  new Usuario();
	$usuario_up->loadById(9);
	$usuario_up->update('professor','&*2334%');
	echo $usuario_up;
	echo PHP_EOL."============".PHP_EOL;	

?>