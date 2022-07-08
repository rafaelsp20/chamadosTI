<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/chamados.php";

	$obj= new chamados();

$dados=array(	

		$_POST['id_chamado'],		
	    $_POST['necessidadeU'],
);

		
	   echo $obj->atualizar($dados);

 ?>