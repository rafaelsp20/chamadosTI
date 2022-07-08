<?php 
session_start();
if(isset($_SESSION['usuario'])){
	?>
<?php 

require_once "../classes/conexao.php";
	$c= new conectar();
	$conexao=$c->conexao();
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chamados</title>

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
          <a class="nav-link text-white h5" href="inicio.php">Inicio <span class="sr-only">(Página atual)</span></a>
        </li>
      <li class="nav-item active">
          <a class="nav-link text-white h5" href="#">Chamados <span class="sr-only">(Página atual)</span></a>
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
            <h4 class="display-6">Abertura de Chamado</h4>            
            <br>
            <br>
            <form id="frmCategorias">
               <div class="form-group">
                  <div class="form-row">
                      <div class="col">
                        
                          <input type="text" class="form-control col-md-12" name="solicitante" id="solicitante" placeholder="Solicitante">
                       </div>        
                            <div class="col">
                              <select class="custom-select" name="loja" id="loja">
                              <?php
                              $sql="SELECT id_local,nome_local from unidade";
                              $result=mysqli_query($conexao,$sql);
                              while ($unidade=mysqli_fetch_row($result)):
                                ?>
                                <option value="<?php echo $unidade[0] ?>"><?php echo $unidade[1]." "//.$cliente[2] ?></option>
										          <?php endwhile; ?>
                              </select>
                        </div>
                  </div>                 
								</div>

                                           
                    <div class="form-group">
                      <label for="mensagem" class="font-weight-bold">Problema:</label>
                      <textarea class="form-control" name="problema" id="problema" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <hr>  
                    <div class="form-group">
                      <label for="mensagem" class="font-weight-bold">Serviço Executado:</label>
                      <textarea class="form-control" name="servicoexecutado" id="servicoexecutado" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <div class="form-group">
                    <label for="mensagem" class="font-weight-bold">Serviço Complementar:</label>
                    <textarea class="form-control" name="servicocomplementar" id="servicocomplementar" placeholder="Digite a mensagem..."></textarea>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="inputZip"class="font-weight-bold">Hora Início:</label>
                    <input type="time" class="form-control" name="inicio" id="inicio">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip" class="font-weight-bold">Hora Fim:</label>
                    <input type="time" class="form-control" name="fim" id="fim">
                  </div>
                </div>

              <div class="form-group text-center">
                <button class="btn btn-primary" id="btnAdicionarCategoria">SALVAR</button>
                
              </div>
            </div>
          </div>
    </form>
    </div>      
 
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
		$(document).ready(function(){

			$('#tabelaCargosLoad').load("cargos/tabelaCargos.php");			
			$('#btnAdicionarCategoria').click(function(){
				vazios=validarFormVazio('frmCategorias');
				if(vazios > 0){
					alertify.alert("Preencha os Campos!!");
					return false;
				}
				dados=$('#frmCategorias').serialize();
				$.ajax({
					type:"POST",
					data:dados,
					url:"../procedimentos/chamados/inserirChamados.php",
					success:function(r){					
					if(r==1){
            window.location="chamado.php";
            alert("cadastrado com sucesso!!");            
				}else{
					alertify.error("Não foi possível adicionar ocorrencia");
				}
			}
		});
	});
});
	</script>	

<?php 
}else{
	header("location:../index.php");
}
?>