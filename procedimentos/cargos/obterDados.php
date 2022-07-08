<?php 
	
	require_once "../../classes/conexao.php";
	require_once "../../classes/chamados.php";

	$obj= new chamados();

	$id=$_POST['idfornecedor'];

	//var_dump ($id);

	echo json_encode($obj->obterDados($id));

	?>