<?php require_once "dependencias.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/phpoo.png" alt="" width="200px" height="150px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span>Inicio</a>
            </li>
            <li class="active"><a href="chamado.php"><span class="glyphicon glyphicon-home"></span>Chamado</a>
            </li>            
            <li class="active"><a href="../indexpdf.php"><span class="glyphicon glyphicon-home"></span>pdf</a>
            </li> 
            </li>         
            
            <?php if($_SESSION['usuario'] == "admin"): ?>
            <li> <a href="usuarios.php"><span class="glyphicon glyphicon-off"></span> Gestão Usuários</a></li>
          <?php endif; ?>              
              <li> <a style="color: red" href="../procedimentos/sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
 </div>
    <!--/.contatiner -->
 </div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<!-- /container -->        
</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').width(100);
      $('.logo').height(60);
    }
    else {
      $('.logo').height(100);
      $('.logo').width(150);
    }
  }
  ); 
</script>