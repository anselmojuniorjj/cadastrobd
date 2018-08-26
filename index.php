<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="style/estilo.css" rel="stylesheet" >
    
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
        <?php
        
        ?>
        
        <div class="row margin">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary pad">
                    <h2 class="text-muted index">Cadastro de Funcionário</h2>
                </div>
            </div>
        </div>
                
        <div class="row imgIndex">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <img src="img/paris.jpg" class="img-responsive img-thumbnail" alt="Paris">
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <form action="verificador/nivel.php" method="post">
                    <fieldset class="senha">
                        <legend>Login</legend>
                        <p>Usuário:
                            <input type="text" name="usuario" size="15" autocomplete="off" autofocus/></p>
                        <p>Senha:
                            <input type="password" name="senha" size="15"/></p>
                        <p><input type="submit" value="Entrar"/></p>
                    </fieldset>
                </form>
            </div>
        </div>
       
        
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
