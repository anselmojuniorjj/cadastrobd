<?php
include ('../conexao/conexao.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
$rm = $_SESSION['rm'];
$sql = "DELETE FROM rm WHERE RM=".$rm;

if(mysqli_query($conn, $sql)){
    echo "Funcionário excluído com sucesso!";
    echo "<script>alert ('Funcionário excluído com sucesso!');</script>";
    echo "<script>window.location = 'listaexc.php';</script>";
}else{
    echo "Erro: ".$sql."<br>". mysqli_error($conn);
    echo "<script>alert ('Erro ao excluir!');</script>";
    echo "<script>window.location = 'listaexc.php';</script>";
}

mysqli_close($conn);

