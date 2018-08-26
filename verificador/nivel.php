<?php
include ('../conexao/conn1.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
}
if(($senha == "")||($usuario == "")){
    echo "Preencha todos os campos!";
    echo "<script>alert ('Preencha Usuário e Senha!');</script>";
    echo "<script>window.location = '../index.php';</script>";
}

$sql = "SELECT usuario, senha FROM psw";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        if(($usuario == $row['usuario'])&&($senha == $row['senha'])){
            echo "<script>window.location = '../omega/master.php';</script>";
        }
    }    
}

mysqli_close($conn);
include ('../conexao/conn2.php');

if(!$conn2){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT usuario, senha FROM beta";
$result = mysqli_query($conn2, $sql);

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        if(($usuario == $row['usuario'])&&($senha == $row['senha'])){
            echo "<script>window.location = '../beta/slave.php';</script>";
        }
    }
    echo "Usuário e/ou senha inválidos";
    echo "<script>alert ('Usuário e/ou senhas inválidos');</script>";
    echo "<script>window.location = '../index.php';</script>";
}else{
    echo "Falha na conexão";
    echo "<script>alert ('Falha na conexão');</script>";
    echo "<script>window.location = '../index.php';</script>";
}

mysqli_close($conn2);