<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/cargos.php";

	$obj= new produtos();

	$idcargo=$_POST['idcargo'];

	echo $obj->excluir($idcargo);

?>