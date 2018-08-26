<?php

if (isset($_POST['cod1'])){
    $cod1=  $_POST['cod1'];
}

if (!$cod1){
    echo "Escolha um usuário";
    echo "<script>alert ('Escolha um usuário');</script>";
    echo "<script>window.location = 'exc.php';</script>";
}else{
    if($cod1 == 1){
        echo "Você não pode excluir o usuário Master!";
        echo "<script>alert ('Você não pode excluir o usuário Master1!');</script>";
        echo "<script>window.location = 'exc.php';</script>";
    }else{
        session_start();
        $_SESSION['cod1'] = $cod1;
        echo "<script>"
    . "if (!confirm('Deseseja realmente excluir este usuário?')){"
            . "window.location = 'exc.php';}</script>"
                . "}else{"
                . "<script>window.location = 'excluir1.php';</script>"
                . "}";
    }
    
}