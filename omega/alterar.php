<?php
include ('../conexao/conexao.php');
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

session_start();
if(isset($_SESSION['rm'])){
    $rm = $_SESSION['rm'];
}

if(isset($_POST['nome'])){
    $nome = ucwords(strtolower($_POST['nome']));
    $snome = ucwords(strtolower($_POST['snome']));
    $cargo = ucwords(strtolower($_POST['cargo']));
    $idade = $_POST['idade'];
    $tel = $_POST['tel'];
}

if(($nome == "")||($snome == "")||($cargo == "")||($idade == "")||($tel == "")){
    echo "Preencha todos os campos!";
    echo "<script>alert ('Preencha todos os campos!');</script>";
    echo "<script>window.location = 'alteracao.php';</script>";
}else{
    $sql = "UPDATE rm SET NOME='".$nome."', SOBRENOME='".$snome."', CARGO='".$cargo."', IDADE='".$idade."', TELEFONE='".$tel."' WHERE RM=".$rm;
    
    
    if(mysqli_query($conn, $sql)){
        echo "Alteração realizada com sucesso!";
        echo "<script>alert ('Alteração realizada com sucesso!');</script>";
        echo "<script>window.location = 'listaalt.php';</script>";
    }else{
        echo "Erro! Alteração NÃO foi realizada!".$sql."<br>".mysqly_error($conn);
        echo "<script>alert ('Erro! Alteração não foi realizada!');</script>";
        echo "<script>window.location = 'listaalt.php';</script>";
    }
}

mysqli_close($conn);