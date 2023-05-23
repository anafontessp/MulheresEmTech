<?php
session_start();

// Redireciona usuários não autenticados para a página principal
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: ../index.php");
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
        <div class="nvl-container current-page">
          <div class="nvl-title">
            <span>Nível 01</span>
          </div>
        </div>
        <!-- Nível 02 -->
        <a href="<?php if($_SESSION["progresso"] > 1){ echo "./nivel02.php"; } ?>" class="nvl-container <?php if($_SESSION["progresso"] < 2){ echo "disabled"; } ?>">
          <div class="nvl-title">
            <span>Nível 02</span>
          </div>
        </a>
        <!-- Nível 03 -->
        <a href="<?php if($_SESSION["progresso"] > 2){ echo "./nivel03.php"; } ?>" class="nvl-container <?php if($_SESSION["progresso"] < 3){ echo "disabled"; } ?>">
          <div class="nvl-title">
            <span>Nível 03</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <section class="conteudo-main">
    <div class="conteudo-container">
      <h1>Nível 01</h1>
      <br>
      <p>Conteúdo da página do nível 01</p>
      <?php if($_SESSION["progresso"] < 2) { ?>

        <!-- Detalhe: o link passado contém o parâmetro "nível", com o valor de 1 -->
        <a class="btn-complete-nvl" href="./add-nivel.php?nivel=1">
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