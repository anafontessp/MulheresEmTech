<?php
    
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    //echo $cadastro;

    include("conexao.php");

    try{
        $stmt = $pdo->prepare("insert into tbCadastro values(null,'$nome','$email','$senha')");
        $stmt ->execute();

        $pdo = null;

        header("Location:cadastro.php");

    }
    catch(PDOException $e){
        echo "Erro: ".$e->getMessage();

    }
?>