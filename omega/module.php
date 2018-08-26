<?php
include ('../conexao/conexao.php');
require_once 'Funcionario.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['nome'])){
    
    $func = new Funcionario($_POST['nome'],$_POST['cargo'],$_POST['idade'],$_POST['tel']);
    
    $nome = ucwords(strtolower($_POST['nome']));
    $snome = ucwords(strtolower($_POST['snome']));
    $cargo = ucwords(strtolower($_POST['cargo']));
    $idade = $_POST['idade'];
    $tel = $_POST['tel'];
    
    if(($nome=="")||($snome=="")||($cargo=="")||($idade=="")||($tel=="")){
        echo 'Preencha todos os campos!';
        echo "<script>alert ('Preencha todos os campos!');</script>";
        echo "<script>window.location = 'formulario.php';</script>";
    }else{
        $sql = "INSERT INTO rm (NOME, CARGO, IDADE, TELEFONE, SOBRENOME)";
        $sql .= " VALUES ('".$nome."', '".$cargo."', '".$idade."', '".$tel."', '".$snome."')";
        $query = mysqli_query($sql);
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo "<script>alert ('Funcionário cadastrado com sucesso!');</script>";
            echo "<script>window.location = 'formulario.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "<script>alert ('Erro ao cadastrar funcionário!');</script>";
                echo "<script>window.location = 'index.php';</script>";
            }
        
        
    }
    
    mysqli_close($conn);
}
