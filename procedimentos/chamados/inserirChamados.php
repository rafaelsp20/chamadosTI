<?php 
	session_start();
	$usuario=$_SESSION['usuario'];
    $iduser=$_SESSION['iduser'];

	require_once "../../classes/conexao.php";
	require_once "../../classes/chamados.php";

	$obj= new chamados();
	                
			$dados[0]=$iduser;	  
			$dados[1]=$_POST['solicitante'];
			$dados[2]=$_POST['loja'];
			$dados[3]=$_POST['problema'];
			$dados[4]=$_POST['servicoexecutado'];
			$dados[5]=$_POST['servicocomplementar'];	
			$dados[6]=$_POST['inicio'];	
			$dados[7]=$_POST['fim'];			
			echo $obj->inserirChamados($dados);
				

 ?>