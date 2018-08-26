<?php
include ('../conexao/conn1.php');
include ('../conexao/conn2.php');
?>
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
                    <h2 class="text-muted index">Excluir Usuário</h2>
                </div>
            </div>
        </div>
               
        <div class="row margin">
            <div class="col-xs-6 col-md-8 col-md-offset-2 col-lg-8 col-md-offset-2">
                <a href="../omega/master.php" type="button" class="btn btn-info">Início</a>
                <a href="../omega/formulario.php" type="button" class="btn btn-info">Cadastrar Funcionários</a>
                <a href="../omega/listar.php" type="button" class="btn btn-info">Listar Funcionários</a>
                <a href="../omega/consultar.php" type="button" class="btn btn-info">Consultar Funcionários</a>
                <a href="../omega/listaalt.php" type="button" class="btn btn-info">Alterar Dados</a>
                <a href="../omega/listaexc.php" type="button" class="btn btn-info">Excluir Funcionário</a>
            </div>
        </div>   
        
        <div class="row imgIndex">
            <div class="col-xs-12 col-md-4 col-lg-4">
               <form action="excmaster.php" name="formulario1" method="post">
                <fieldset>
                    <legend>Usuário Master</legend>
                    <p>Excluir usuário:</p>
                    <?php
                        $sql = "SELECT cod, usuario FROM psw";
                        $result = mysqli_query($conn, $sql);
                        $cont1 = 0;
                        if (mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)){
                      
                    ?>
                    <p>
                        <input id="usuario1" type="radio" name="cod1" value="<?php echo "".$row['cod']; ?>"><?php echo "".$row['usuario']; ?>  
                        <?php $cont1++; ?>
                    </p>
                    <?php 
                        }}
                    ?>
                    <p><input type="submit" value="Excluir" class="btn btn-danger"/></p>
                </fieldset>
                    
            </form>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <form action="excbeta.php" name="formulario2" method="post">
                <fieldset>
                    <legend>Usuário Beta</legend>
                    <p>Excluir usuário:</p>
                    <?php
                        $sql = "SELECT cod, usuario FROM beta";
                        $result = mysqli_query($conn2, $sql);
                        $cont = 0;
                        if (mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)){
                                
                    ?>
                    <p>
                        <input id="usuario2" type="radio" name="cod2" value="<?php echo "".$row['cod']; ?>"><?php echo "".$row['usuario']; ?>  
                            <?php $cont++; ?>
                    </p>
                    <?php }} ?>
                    <p><input type="submit" value="Excluir" class="btn btn-danger" onclick="conf2(<?php echo "".$cont; ?>)"/></p>
                    
                </fieldset>       
                </form>
            </div>
                       
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                <a href="../omega/master.php" class="btn btn-warning">Cancelar</button></a>
            </div>
        </div>
        
        
         <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="../jquery/jquery-3.2.1.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../js/bootstrap.min.js"></script>
        <script src="../js2/main.js"></script>
    </body>
</html>

