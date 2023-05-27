<?php

    session_start();

    include("conexao.php");

    //recuperação dos valores digitados no formulario
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    //variáveis para verificação com o banco de dados
    $emailBanco= "";
    $senhaBanco= "";

    try{
        $stmt = $pdo -> prepare("select idUsuario, nome, email, senha, progresso from tbCadastro where email='$email' and senha='$senha'");

        $stmt ->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            $idBanco = $row['idUsuario'];
            $nomeBanco = $row['nome'];
            $emailBanco = $row['email'];
            $senhaBanco = $row['senha'];
            $progressoBanco = $row['progresso'];
            unset($row['senha']);
        }
    }
    catch(PDOException $e){
        echo "Login ou senha inválido" . $e ->getMessage();
    }

    //verificação para autenticação
    if($email == $emailBanco && $senha == $senhaBanco){
        $_SESSION["autorizacao"] = "true";
        $_SESSION["user_id"] = $idBanco;
        $_SESSION["user_name"] = $nomeBanco;
        $_SESSION["progresso"] = $progressoBanco;
        unset($senhaBanco); //destruição da variável $senhaBanco
        header("Location:trilhas.php");
    }
    else{
        $_SESSION["autorizacao"] = false;
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("Location:login.php?error=true");
    }

?>