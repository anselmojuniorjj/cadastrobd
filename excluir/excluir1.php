<?php
include('../conexao/conn1.php');

if (!$conn){
    die("Connection failed:".mysqli_connect_error());
}

session_start();
$cod1 = $_SESSION['cod1']; 

$sql = "DELETE FROM psw WHERE cod=".$cod1;

if(mysqli_query($conn, $sql)){
    echo "Usuário excluído com sucesso!";
    echo "<script>alert ('Usuário excluído com sucesso!');</script>";
    echo "<script>window.location = 'exc.php';</script>";
}else{
    echo "Erro: ".$sql."<br>". mysqli_error($conn);
    echo "<script>alert ('Erro ao excluir!');</script>";
    echo "<script>window.location = 'exc.php';</script>";
}

mysqli_close($conn);