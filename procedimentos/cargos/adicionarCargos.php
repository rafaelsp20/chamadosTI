<?php 
	session_start();
	$iduser=$_SESSION['iduser'];
	require_once "../../classes/conexao.php";
	require_once "../../classes/cargos.php";

	$obj= new cargos();

					$dados[1]=$_POST['categoria'];
					echo $obj->inserirCargo($dados);
	

 ?>