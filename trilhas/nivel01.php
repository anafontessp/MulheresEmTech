<?php
session_start();

// Redireciona usuários não autenticados para a página principal
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: ../index.php");
}

include('cabecalho-trilha.php'); 
?>

<main class="trilha-main">
  
  <section class="nvl-main" id="nvlContainer">
    <div class="nvl-column-container">
      <div class="nvl-column">
        <!-- Home -->
        <a href="./trilhas-tech.php" class="nvl-container mt-3rem">
          <div class="nvl-title">
            <span>Trilhas_Tech</span>
          </div>
        </a>
        <!-- Nível 01 -->
        <div class="nvl-container current-page">
          <div class="nvl-title">
            <span>Módulo 01</span>
          </div>
        </div>
        <!-- Nível 02 -->
        <a href="<?php if($_SESSION["progresso"] > 1){ echo "./nivel02.php"; } ?>" class="nvl-container <?php if($_SESSION["progresso"] < 2){ echo "disabled"; } ?>">
          <div class="nvl-title">
            <span>Módulo 02</span>
          </div>
        </a>
        <!-- Nível 03 -->
        <a href="<?php if($_SESSION["progresso"] > 2){ echo "./nivel03.php"; } ?>" class="nvl-container <?php if($_SESSION["progresso"] < 3){ echo "disabled"; } ?>">
          <div class="nvl-title">
            <span>Módulo 03</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <section class="conteudo-main">
    <div class="conteudo-container">
      <h1>Módulo 01</h1>
      <br>
      <p> Definir seus objetivos e identificar os motivos pelos quais você deseja fazer uma transição de carreira
          é muito importante antes de iniciar sua jornada. Esse curso ajudará a orientar sua trilha de
          aprendizagem e manter o foco durante todo o processo. Nessa trilha, você explorará os principais
          aspectos envolvidos na mudança de carreira e descobrirá estratégias para fazer uma transição bem-sucedida.</p>

    <!-- utilizando accordion -->
    <section class="accordion" id="accordionExample">
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUm" aria-expanded="false" aria-controls="collapseUm">
                    Trilha - Como começar sua transição profissional
                </button>
            </h2>
            <div id="collapseUm" class="accordion-collapse collapse" aria-labelledby="trilha1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Trilha Transição de Carreira</p>
                    <div class="list-group">
                        <a href="https://www.tuacarreira.com/transicao-de-carreira/" class="list-group-item list-group-item-action">
                            Artigo - Transição de carreira e planejamento: a chave do sucesso
                        </a>
                        <a href="https://www.voitto.com.br/blog/artigo/transicao-de-carreira" class="list-group-item list-group-item-action"> Artigo - Veja quando fazer uma Transição
                            de Carreira é a melhor opção e descubra como se preparar</a>
                        <a href="https://negocios.umcomo.com.br/artigo/transicao-de-carreira-quando-e-como-fazer-30292.html" class="list-group-item list-group-item-action"> Artigo - Transição de carreira: 
                            quando e como fazer</a>
                        <a href="https://www.youtube.com/watch?v=6Uz5li1qkmg" class="list-group-item list-group-item-action"> Vídeo - Cinco sinais que você precisa mudar de carreira </a>
                        <a href="https://evernote.com/intl/pt-br" class="list-group-item list-group-item-action"> APP - Ferramenta de organização pessoal</a>
                        <a href="https://store.steampowered.com/app/448280/Job_Simulator/" class="list-group-item list-group-item-action"> Jogo - Job Simulator </a>
                        <a href="https://estudos.vestibulares.com.br/cursos-de-ti" class="list-group-item list-group-item-action"> Teste Vocacional </a>
                        <a href="#" class="list-group-item list-group-item-action"> Guia prático </a>
                    </div>
                </div>
            </div>
        </article>
        
        
        <br>

      <?php if($_SESSION["progresso"] < 2) { ?>

        <!-- Detalhe: o link passado contém o parâmetro "nível", com o valor de 1 -->
        <a class="btn-complete-nvl" href="./add-nivel.php?nivel=1">
          <span>Completar módulo</span>
        </a>

      <?php } else { ?>
        
        <div class="btn-complete-nvl-completed">
          <span>Você já completou esse módulo</span>
        </div>
      <?php } ?>
    </div>
  </section>
</main>
<hr>

<script type="text/javascript" src="../script.js"></script>