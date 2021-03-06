<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulário de Contato</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css"> 
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
          <a class="nav-link text-white h5" href="#">Chamados <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white h5" href="#">Sair <span class="sr-only">(Página atual)</span></a>
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
            <h3 class="display-6">Abertura de Chamado</h3>            
            <br>
            <br>
            <form>
               <div class="form-group">
                  <div class="form-row">
                      <div class="col">
                          <input type="text" class="form-control col-md-12" placeholder="Solicitante">
                       </div>        
                   <div class="col">
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Escola o local...</option>
                      <option value="1">Loja 01</option>
                      <option value="2">Loja 02</option>
                      <option value="3">Loja 03</option>
                    </select>
                        </div>
                  </div>
              </div>                                        
                    <div class="form-group">
                      <label for="mensagem" class="font-weight-bold" >Problema:</label>
                      <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <hr>  
                    <div class="form-group">
                      <label for="mensagem" class="font-weight-bold">Serviço Executado:</label>
                      <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <div class="form-group">
                    <label for="mensagem" class="font-weight-bold">Serviço Complementar:</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem..."></textarea>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="inputZip"class="font-weight-bold">Hora Início:</label>
                    <input type="time" class="form-control" id="inputZip">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip" class="font-weight-bold">Hora Fim:</label>
                    <input type="time" class="form-control" id="inputZip">
                  </div>
                </div>


              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">SALVAR</button>
              </div>
            </div>
          </div>
    </form>
    </div>   
    
 <!--<div class="col-12">
      <div class="card">
        <div class="card-body">
          <h1>Contato</h1>
          <form id="form-contato">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input class="form-control col-xs-4 col-md-4" type="text" name="nome" id="nome" placeholder="Digite o seu nome...">
            </div>
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input class="form-control col-xs-4 col-md-4" type="email" name="email" id="email" placeholder="Digite o seu e-mail...">
            </div>
            <div class="form-group">
              <label for="mensagem">Mensagem:</label>
              <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem..."></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
            <div class="alert alert-danger d-none">
              Preencha o campo <span id="campo-erro"></span>!
            </div>
          </form>
        </div>
      </div>-->
    </div>   
  </div>
</div> 

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formulario.js"></script>
</body>
</html>