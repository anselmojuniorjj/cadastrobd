<?php
if (isset($_POST['cod2'])){
    $cod2=  $_POST['cod2'];
}

if (!$cod2){
    echo "Escolha um usuário";
    echo "<script>alert ('Escolha um usuário');</script>";
    echo "<script>window.location = 'exc.php';</script>";
}else{
    session_start();
    $_SESSION['cod2'] = $cod2;
    echo "<script>"
    . "if (!confirm('Deseseja realmente excluir este usuário?')){"
            . "window.location = 'exc.php';}</script>"
                . "}else{"
                . "<script>window.location = 'excluir2.php';</script>"
                . "}";
    }
    


