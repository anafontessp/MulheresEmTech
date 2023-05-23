<?php
session_start();
include("../conexao.php");

$userId = $_SESSION['user_id'];

// Através do parâmetro passado na URL da página, é resgatado o número do nível que o usuário acabou de concluir.
$pageComeFrom = $_GET['nivel'];

// Gera o novo progresso do usuário (progresso anterior + 1)
$newProgress = $_SESSION['progresso'] + 1;

try {
  echo "UPDATE `tbcadastro` SET `progresso` = '$newProgress' WHERE `tbcadastro`.`idUsuario` = $userId;";
  $stmt = $pdo -> prepare("UPDATE `tbcadastro` SET `progresso` = '$newProgress' WHERE `tbcadastro`.`idUsuario` = $userId;");

  $stmt ->execute();
  header("Location: ./nivel0$pageComeFrom");

} catch(PDOException $e) {
  echo "Não foi possível subir de nível" . $e ->getMessage();
}
