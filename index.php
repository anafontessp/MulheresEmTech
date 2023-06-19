<?php include('cabecalho.php'); ?>
<!-- banner -->
<section class="banner">
    <div class="container">
        <div class="banner__text">
            <div class="line"></div>
            <h1>Afinal o que é MulheresEmTech30+?</h1>
            <p>
                O objetivo desse projeto é compartilhar trilhas de aprendizagem
                com conteúdo para capacitar mulheres a partir dos 30 anos que queiram
                fazer sua transição profissional para a área da tecnologia.<br>
                O MulheresEmTech30+ acredita que todos somos responsáveis por uma educação
                inclusiva, de qualidade e igualitária, para que num futuro próximo tenhamos
                mais oportunidades e menos desigualdade, e que o gênero de uma pessoa 
                não seja o fator determinante na escolha de um profissional.<br>
                Participe e faça parte dessa mudança!
            </p>
            <center><a href="cadastro.php" button class="btn">Cadastre-se</a></center>
        </div>
        <div class="banner__img">
            <picture>
                <source media="(max-width:800px)" srcset="images/background.jfif">
                <img src="images/background.jfif">
            </picture>
        </div>
    </div>
    <img src="images/bg-pattern-intro-left-desktop.svg" class="pattern left" alt="">
    <img src="images/bg-pattern-intro-right-desktop.svg" class="pattern right" alt="">
</section>
<!-- end banner -->
<section class="diferent">
    <div class="container">
        <div class="line"></div>
        <br>
        <h3 class="h3">Curiosidades</h3>
        <div class="cards">
            <!-- card item 0 -->
            <div class="card-item">
                <img src="images/icon-snappy-process.svg" alt="">
                <p class="titulo">Transição de Carreira</p>
                <p class="description">Uma pesquisa realizada pelo RH EDC Group revelou que 53% dos brasileiros
                    desejam mudar de área de atuação. E a área de Tecnologia da Informação (TI) é a mais almejada por esses profissionais.</p>
            </div>
            <!-- card item 0 -->
            <!-- card item 1 -->
            <div class="card-item">
                <img src="images/icon-affordable-prices.svg" alt="">
                <p class="titulo">Mercado de Trabalho</p>
                <p class="description">As mulheres ainda são sub-representadas: apenas 16% dos entrevistados que se identificaram como mulheres
                    trabalhavam em funções técnicas de TI, enquanto 28% dos homens entrevistados.</p>
            </div>
            <!-- card item 1 -->
            <!-- card item 3 -->
            <div class="card-item">
                <img src="images/icon-people-first.svg" alt="">
                <p class="titulo">Representatividade</p>
                <p class="description"> A diversidade é importante para os profissionais de tecnologia: 80% dos entrevistados disseram que a diversidade
                    é importante para eles ao escolher uma empresa para trabalhar.</p>
            </div>
            <!-- card item 3 -->
        </div>
    </div>
</section>
<!-- end diferent -->
<!-- section find -->

<!-- cards com vídeos de apresentação -->

<br>
    <center>
        <h4>Conheça as Trilhas_Tech</h4>
    </center>
    <br>

    <div class="container">
      <section class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <article class="col">
            <div class="card h-100 border-color">
            <img class="card-img-top"src="images/inspire.png" alt="">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Transição de Carreira</h5>
                    <p class="card-text">Como fazer para iniciar minha transição de carreira com 30 anos? Por onde devo começar?</p>
                    </div>
            </div>

        </article>
        <article class="col">
            <div class="card h-100 border-color">
            <img class="card-img-top"src="images/transicao.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Algoritmo</h5 <p class="card-text">O Curso de Algoritmo é a base necessária para quem quer aprender em linguagens famosas do mercado, como C, Java, PHP e muitas outras.</p>
                </div>
            </div>
        </article>
        <article class="col">
            <div class="card h-100 border-color">
            <img class="card-img-top"src="images/logica" alt="">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Lógica de Programação</h5>
                    <p class="card-text"> Conheça a base para ser um programador(a) e iniciar seu conhecimento em tecnologia.</p>
                </div>
            </div>
        </article>
      </div>
    </section>
  </section>
</main>

<script type="text/javascript" src="../script.js"></script>

<!-- end section find -->



<?php include('rodape.php'); ?>