<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
 ?>
<?php

//$_SESSION['usuario'] = $dados[0];
//$SESSION_ID = id da sessão que você quer saber se existe
//echo (file_exists(session_save_path().$SESSION['usuario']) ? "Existe!" : "Não existe!");
//var_dump($_SESSION['usuario']);

//print_r($_SESSION['usuario']);


echo json_encode($_SESSION['usuario']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Início</title>
	<?php require_once "menu.php" ?>
</head>
<body>

<div id="vendasFeitas"></div>

</body>
</html>

<?php 
} else{
	header("location:../index.php");
}

 ?>

<script type="text/javascript">
		$(document).ready(function(){

				
				$('#vendasFeitas').load('vendas/vendasRelatorios.php');
				
				$('#vendasFeitas').show();
				
		});

		

	</script>


