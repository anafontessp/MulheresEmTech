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
            <span>Trilhas_Tech</span>
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
      <h1>Transição Profissional</h1>
      <br>
      <p>Começar a transição de carreira profissional envolve planejamento e uma organização
        cuidadosa. Vamos apresentar nesse curso algumas dicas para ajudar você no
        início dessa jornada.
        Ao longo da transição de carreira, esteja aberto a aprender com a experiência.
        Esteja disposto a adaptar sua trilha de aprendizagem com base no feedback recebido,
        nas oportunidades que surgirem e nas mudanças do mercado.</p>
    </div>
  </section>
</main>