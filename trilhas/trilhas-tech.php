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
      <h1>Transição de Carreira</h1>
      <br>
      <p> Começar a transição de carreira profissional envolve planejamento e uma organização
        cuidadosa. Vamos apresentar nesse curso algumas dicas para ajudar você no
        início dessa jornada.
        Ao longo da transição de carreira, esteja aberto a aprender com a experiência.
        Esteja disposto a adaptar sua trilha de aprendizagem com base no feedback recebido,
        nas oportunidades que surgirem e nas mudanças do mercado.</p>
        
    </div>

<!-- cards com vídeos de apresentação -->

<br>
<center>
    <h4>Transição profissional e os primeiros passos para planejar sua mudança de carreira</h4>
</center>
<br>

<div class="container">
    <section class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <article class="col">
            <div class="card h-100 border-color">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/LhyOd2NGvk0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                <div class="card-body">
                    <h5 class="card-title">Mudança de Profissão</h5>
                    <p class="card-text">O que fazer quando chegamos a conclusão que precisamos (ou queremos) mudar de carreira, profissão? Será que precisa fazer uma nova graduação? O mercado vê isso com bom olhos?
                        E se eu sou empreendedor e decido voltar a CLT? Muitas dúvidas e com razão, mudar de carreira é um processo que precisa de planejamento, organização e paciência, porque dependendo da transição
                        de carreira pode ser em curto, médio ou longo prazo.</p>
                </div>
            </div>

        </article>
        <article class="col">
            <div class="card h-100 border-color">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/IqLtEq_t0nc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Mudança de Profissão Pós 30</h5 <p class="card-text">Neste vídeo temos uma visão da Dra. Ana Beatriz Barbosa apenas como caráter educativo sobre a transição de carreira após os 30 anos, ela é entrevistada pelo
                    canal Mentes em Pauta do Youtube. Os vídeos desse canal são produzidos baseados na experiência da Dra. Ana Beatriz, na observação prática de pacientes e em pesquisas científicas
                    mais recentes até o momento.</p>

                </div>
            </div>
        </article>
        <article class="col">
            <div class="card h-100 border-color">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pD0bIsqvzlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                <div class="card-body">
                    <h5 class="card-title">Transição de Carreiras</h5>
                    <p class="card-text"> Transição de carreira não deve ser feita no impulso, sem planejamento, é necessário se planejar, se preparar, saber analisar o mercado e ter paciência,
                        pois ela pode ser um processo de curto, médio ou longo prazo. Nesse vídeo você já pode iniciar seu planejamento de carreira com foco na transição profissional.</p>
                        <br>
                </div>
            </div>
        </article>

    </section>

</div>


  </section>
  
</main>
