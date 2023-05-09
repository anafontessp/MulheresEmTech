<?php

    session_start();

    include("conexao.php");

    //recuperação dos valores digitados no formulario
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    //variáveis para verificação com o banco de dados
    $emailBanco = '';
    $senhaBanco = '';

    try{
        $stmt = $pdo -> prepare("select email, senha from tbUsuario where email='$email' and senha='$senha'");

        $stmt -> execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            $emailBanco = $row['email'];
            $senhaBanco = $row['senha'];
            
        }
    }
    catch(PDOException $e){
        echo "Login ou senha inválido" . $e ->getMessage();
    }

    //verificação para autenticação
    if($email == $emailBanco && $senha == $senhaBanco){
        $_SESSION['autorizacao'] = true;
        header("Location:index-painel.php");
    }
    else{
        $_SESSION['autorizacao'] = false;
        unset($_SESSION['autorizacao']);
        session_destroy();
        header("Location:../login.php");
    }

?>