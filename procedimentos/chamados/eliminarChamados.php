<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/chamados.php";

	$obj= new chamados();

	$idcargo=$_POST['idcargo'];

	echo $obj->excluir($idcargo);

?>