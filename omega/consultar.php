<?php?>    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Consultar Funcionários</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/estilo.css">
    
     <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../fonts/glyphicons-halflings-regular.ttf">
      

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body onload="history.go(+1)">
        <div>
            
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll">Master</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../cadastrar/cad.php" class="logout">Cadastrar Usuário</a></li>
                            <li><a href="../excluir/exc.php" class="logout">Excluir Usuário</a></li>
                            <li><a href="../index.php" class="logout">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        </nav>
            
        <div class="row margin marginTop">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary pad">
                    <h2 class="text-muted index">Consultar Funcionários</h2>
                </div>
            </div>
        </div>
            
        <div class="row margin">
            <div class="col-xs-6 col-md-8 col-md-offset-2 col-lg-8 col-md-offset-2">
                <a href="master.php" type="button" class="btn btn-info">Início</a>
                <a href="formulario.php" type="button" class="btn btn-info">Cadastrar Funcionários</a>
                <a href="listar.php" type="button" class="btn btn-info">Listar Funcionários</a>
                <a href="listaalt.php" type="button" class="btn btn-info">Alterar Dados</a>
                <a href="listaexc.php" type="button" class="btn btn-info">Excluir Funcionário</a>
            </div>
        </div>    
            
        
        <div class="row margin">
            <div class="col-xs-6 col-md-8 col-md-offset-2 col-lg-8 col-md-offset-2">
                <form action="consulta.php" method="post">
                    <div class="width">
                        <fieldset> 
                            <legend>Consulta de Funcionário</legend>
                            <p>Nome :</p>
                            <p><input type="text" name="name" size="40"></p>
                            <input type="submit" value="Enviar" class="btn btn-success" onclick="consulta.php">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
            
            
        </div>
        
        
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="../jquery/jquery-3.2.1.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
