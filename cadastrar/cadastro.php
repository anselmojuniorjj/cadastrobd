<?php

if(isset($_POST['cad'])){
    $nivel = $_POST['cad'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
}

if (($usuario == "")||($senha == "")){
    echo "Preencha usuário e senha!";
    echo "<script>alert ('Preencha usário e senha!');</script>";
    echo "<script>window.location = 'cad.php';</script>";
}

if ($nivel == "beta"){
    include ('../conexao/conn2.php');

    if(!$conn2){
        die("Connection failed: ".mysqli_connect_error());
    }
    
    $sql = "INSERT INTO beta (usuario, senha)";
    $sql .= " VALUES ('".$usuario."', '".$senha."')";
    $query = mysqli_query($sql);
    if (mysqli_query($conn2, $sql)){
        echo "Usuário e senha cadastrado com sucesso!";
        echo "<script>alert ('Usuário e senha cadastrado com sucesso');</script>";
        echo "<script>window.location = 'cad.php';</script>";
    }else{
        echo "Erro ao cadastrar usuário e senha!".$sql."<br>". mysqli_connect_error();
        echo "<script>alert ('Erro ao cadastrar usuário e senha');</script>";
        echo "<script>window.location = 'cad.php';</script>";
    }
    mysqli_close($conn2);
}elseif($nivel == "master"){
    include ('../conexao/conn1.php');
    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    
    $sql = "INSERT INTO psw (usuario, senha)";
    $sql .= " VALUES ('".$usuario."', '".$senha."')";
    $query = mysqli_query($sql);
    if (mysqli_query($conn, $sql)){
        echo "Usuário Master cadastrado com sucesso";
        echo "<script>alert ('Usuário Master cadastrado com sucesso!');</script>";
        echo "<script>window.location = 'cad.php';</script>";
    }else {
        echo "Erro ao cadastrar usuário!".$sql."br". mysqli_connect_error();
        echo "<script>alert ('Erro ao cadastrar usuário');</script>";
        echo "<script>window.location = 'cad.php';</script>";
    }
}
mysqli_close($conn1);