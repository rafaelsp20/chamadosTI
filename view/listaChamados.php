<?php 
require_once "../classes/conexao.php";
	$c = new conectar();
	$conexao=$c->conexao();
	$sql = "SELECT id, usuario, solicitante,loja, problema, servico1 FROM ocorrencias";
	$result = mysqli_query($conexao, $sql);
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listagem</title>

  <?php //require_once "dependencias.php"; ?>
  <link rel="stylesheet" href="../formularios/css/bootstrap.min.css">
  <link rel="stylesheet" href="../formularios/css/estilo.css"> 

<!--js-->
<link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../lib/select2/css/select2.css">

<script src="../lib/jquery-3.2.1.min.js"></script>
<script src="../lib/alertifyjs/alertify.js"></script>
<script src="../lib/select2/js/select2.js"></script>
<script src="../js/funcoes.js"></script>
</head>

<body>
<div class="container">   
  <nav  class="navbar navbar-light" style="background-color: #606561;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">    
      <ul class="navbar-nav mr-auto mt-2 mt-lg-1">     
      <li class="nav-item active">
          <a class="nav-link text-white h5" href="chamado.php">Chamados <span class="sr-only">(Página atual)</span></a>
        </li>        
        <li class="nav-item active">
          <a class="nav-link text-white h5" href="listaChamados.php">Listagem Chamados <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white h5"  href="../procedimentos/sair.php">Sair <span class="sr-only">(Página atual)</span></a>
        </li>        
      </ul>     
    </div>
  </nav>
</div> 

<div class="container">
  <div class="row">
    <div class="col-12">   
        <div class="card">
          <div class="card-body">
			  <br>
            <h4 class="display-6">Listagem de Chamados</h4> 
			<br><br> 
<table class="table table-borderless">
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
<thead>
    <tr>
    <th scope="col">OS</th>
    <th scope="col">Solicitante</th>
    <th scope="col">Problema</th>
    <th scope="col">Solução</th>
	  <th scope="col">Atualizar</th>
	  <th scope="col">Excluir</th> 
    <th scope="col">PDF</th> 
    </tr>	

	<?php while($mostrar=mysqli_fetch_row($result)): ?> 
	<tr>
		<td><?php echo $mostrar[0]; ?></td>		
		<td><?php echo $mostrar[2]; ?></td>		
		<td><?php echo $mostrar[4]; ?></td>	
		<td><?php echo $mostrar[5]; ?></td>	
		<td>  
     
    <button type="button" class="btn btn-primary btn-sm" class="btn btn-info" data-toggle="modal"  data-target="#abremodalFornecedoresUpdate" onclick="adicionarDado('<?php echo $mostrar[0] ?>')">A</button>
		</td>
		<td>
    <span type="button" class="btn btn-primary btn-sm" class="btn btn-danger" onclick="eliminaCargo('<?php echo $mostrar[0] ?>')">X</a></span>		
		</td>
    <td>
			<a href="../indexpdf1.php?idvenda=<?php echo $mostrar[0] ?>"/a>
			<span type="button" class="btn btn-primary btn-sm" class="btn btn-danger">PDF</button>

			

	</a>
  </span>
		</td>
		<?php //echo $mostrar[0] ?>
		
	</tr>
<?php endwhile; ?>
</table>

		<!-- Button trigger modal --> 
		<!-- Modal -->	

<div class="modal" id="abremodalFornecedoresUpdate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h5>Atualizaçao de dados</h5>	
					<hr>
					</div>
					<div class="modal-body">								
					
						<br>						
							
							<div class="form-group">
							<label for="exampleFormControlTextarea1" class="font-weight-bold">Problema:</label>
							<textarea class="form-control" id="enderecoU" name="enderecoU" disabled=""></textarea>
							<div class="d-flex flex-row-reverse bd-highlight">
							<small id="emailHelp" class="form-text text-danger font-weight-bold">*Este campo não pode ser atualizado!</small>
							</div>
						    </div>
							<br>

							<div class="form-group">
							<label for="exampleFormControlTextarea1" class="font-weight-bold">Solução:</label>
							<textarea class="form-control" id="emailU" name="emailU"></textarea>
						    </div>
							<br>

							<div class="form-group">
							<label for="exampleFormControlTextarea1" class="font-weight-bold">Serviço complementar:</label>
							<textarea class="form-control" id="telefoneU" name="telefoneU"></textarea>
						    </div>
							<br>

						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAdicionarFornecedorU" type="button" class="btn btn-primary" data-dismiss="modal">Atualizar</button>

					</div>
				</div>
			</div>
		</div>	


<!--<script src="../formularios/js/jquery-3.4.1.slim.min.js"></script>-->
<script src="../formularios/js/bootstrap.min.js"></script>
<script src="../formularios/js/formulario.js"></script>
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>

</body>
</html>


<script type="text/javascript">

		//acho que aqui esta o erro para salvar os dados <--esse é o teste tem que ver
		function adicionarDado123(idCategoria,categoria){
			$('#idcategoria').val(idCategoria);
			$('#categoriaU').val(categoria);
		}	

		function eliminaCargo(idcargo){
			alertify.confirm('Deseja excluir esta ocorrencia ?', function(){ 
				$.ajax({
					type:"POST",
					data:"idcargo=" + idcargo,
					url:"../procedimentos/chamados/eliminarChamados.php",
					success:function(r){
							if(r==1){
                window.location="listaChamados.php";
							$('#tabelaCargosLoad').load("listaChamados.php");
							alertify.success("Excluido com sucesso!!");
						}else{
							alertify.error("Não Excluido");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelado !')
			});
		}


		function adicionarDado(idfornecedor){

			$.ajax({
				type:"POST",
				data:"idfornecedor=" + idfornecedor,
				url:"../procedimentos/cargos/obterDados.php",
				success:function(r){
					//alert(r);
					dado=jQuery.parseJSON(r);

					$('#idfornecedorU').val(dado['id_fornecedor']);
					$('#usuarioU').val(dado['usuario']);
					$('#nomeU').val(dado['solicitante']);
					$('#sobrenomeU').val(dado['sobrenome']);
					$('#enderecoU').val(dado['endereco']);
					$('#emailU').val(dado['email']);
					$('#telefoneU').val(dado['telefone']);
					$('#cpfU').val(dado['cpf']);

				}
			});
		}

	</script>

<!--


(Solicitante)

Login e cadastro

campo_solicitante:
campo_Local:
campo_Problema:

campo histórico de chamados ou ocorrencias e 

campos_Status
campos_Solução
campos_Serviços complementar
Hora Inicio e Hora Fim
Tecnico Responsável

campo histórico com detalhes

(Admininistrador)

Verificar todos os registros



 -->