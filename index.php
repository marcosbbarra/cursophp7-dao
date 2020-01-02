<?php

	$aeskey = '4ldetn43t4aed0ho10smhd1l';
	require_once('config.php');
	$sql = new Sql();
	$usuarios = $sql->select("select idusuario, lower(deslogin) as deslogin, dessenha  from tb_usuarios");
	echo json_encode($usuarios);

?>