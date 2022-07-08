<?php 
	session_start();
	$iduser=$_SESSION['iduser'];
	require_once "../../classes/conexao.php";
	require_once "../../classes/unidades.php";

	$obj= new unidades();

					$dados[1]=$_POST['nome_local'];
					echo $obj->inserirUnidade($dados);
	

 ?>