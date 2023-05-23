<?php
session_start();

// Redireciona usuários não autenticados para a página principal
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: ../index.php");
}

// Checa se o usuário concluiu o nível 01
if ($_SESSION["progresso"] < 3) {
  header("Location: trilhas-tech.php");
}

include('cabecalho-trilha.php'); 
?>

<main class="trilha-main">
  
  <section class="nvl-main">
    <div class="nvl-column-container">
      <div class="nvl-column">
        <!-- Home -->
        <a href="./trilhas-tech.php" class="nvl-container mt-3rem">
          <div class="nvl-title">
            <span>Trilhas Tech</span>
          </div>
        </a>
        <!-- Nível 01 -->
        <a href="./nivel01.php" class="nvl-container">
          <div class="nvl-title">
            <span>Nível 01</span>
          </div>
        </a>
        <!-- Nível 02 -->
        <a href="./nivel02.php" class="nvl-container">
          <div class="nvl-title">
            <span>Nível 02</span>
          </div>
        </a>
        <!-- Nível 03 -->
        <a class="nvl-container current-page">
          <div class="nvl-title">
            <span>Nível 03</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <section class="conteudo-main">
    <div class="conteudo-container">
      <h1>Nível 03</h1>
      <br>
      <p>Conteúdo da página do nível 03</p>
      <?php if($_SESSION["progresso"] < 4) { ?>

        <!-- Detalhe: o link passado contém o parâmetro "nível", com o valor de 3 -->
        <a class="btn-complete-nvl" href="./add-nivel.php?nivel=3">
          <span>Completar nível</span>
        </a>

      <?php } else { ?>

        <div class="btn-complete-nvl-completed">
          <span>Você já completou esse nível</span>
        </div>

      <?php } ?>
    </div>
  </section>
</main>