<?php 
if(!isset($_SESSION)) {
    session_start();
}
include("../conexao.php");
try{
    $userId = $_SESSION["user_id"];
    $userName = $_SESSION["user_name"];
    $stmt = $pdo -> prepare("select progresso from tbCadastro where idUsuario='$userId' AND nome='$userName'");

    $stmt ->execute();

    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
        $progressoBanco = $row['progresso'];
    }
}
catch(PDOException $e){
    echo "Consulta ao banco de dados falhou" . $e ->getMessage();
}
$_SESSION['progresso'] = $progressoBanco;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
    
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../script.js">
    <title>MulheresEmTech30+</title>
</head>

<body>
    <!-- nav -->
    <nav class="header-trilhas">
        <a class="back-icon" href="../trilhas.php">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="rgba(9, 10, 67, 0.6)" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="color: rgba(9, 10, 67, 0.6);">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M328 112L184 256l144 144">
                </path>
            </svg>
            <span>Voltar</span>
        </a>
        <div class="logo-container">
            <div class="logo">
                <span>MulheresEmTech30+</span>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    
