<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/cargos.php";

	$obj= new cargos();

$dados=array(
		$_POST['id_cargo'],
	    $_POST['cargoU'],
			);

    echo $obj->atualizar($dados);

 ?>