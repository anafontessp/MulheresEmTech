<?php
session_start();

// Redireciona usuários não autenticados para a página principal
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: index.php");
}

include('cabecalho-trilha.php'); 
?>

<main class="trilha-main">
  
  <section class="nvl-main">
    <div class="nvl-column-container">
      <div class="nvl-column">
        <!-- Home -->
        <div class="nvl-container mt-3rem current-page">
          <div class="nvl-title">
            <span>Trilhas Tech</span>
          </div>
        </div>
        <!-- Nível 01 -->
        <a href="./nivel01.php" class="nvl-container">
          <div class="nvl-title">
            <span>Nível 01</span>
          </div>
        </a>
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
      <h1>Trilhas Tech</h1>
      <br>
      <p>Conteúdo da página Trilhas Tech(Sobre o que é essa trilha? Qual objetivo da trilha? Ao terminar a trilha, quais serão os conhecimentos adiquiridos? etc...)</p>
    </div>
  </section>
</main>