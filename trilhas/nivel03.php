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
        <a href="./nivel01.php" class="nvl-container">
          <div class="nvl-title">
            <span>Módulo 01</span>
          </div>
        </a>
        <!-- Nível 02 -->
        <a href="./nivel02.php" class="nvl-container">
          <div class="nvl-title">
            <span>Módulo 02</span>
          </div>
        </a>
        <!-- Nível 03 -->
        <a class="nvl-container current-page">
          <div class="nvl-title">
            <span>Módulo 03</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <section class="conteudo-main">
    <div class="conteudo-container">
      <h1>Módulo 03</h1>
      <br>
      <p> Nesse módulo, você explorará os principais conceitos para iniciar sua aprendizagem na área da Tecnologia e informações que 
        que servem como base para aprender qualquer linguagem de programação.</p>

    <!-- utilizando accordion -->
    <section class="accordion" id="accordionExample">
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUm" aria-expanded="false" aria-controls="collapseUm">
                    Trilhas_Tech
                </button>
            </h2>
            <div id="collapseUm" class="accordion-collapse collapse" aria-labelledby="trilha1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Trilha Algoritmo</p>
                    <div class="list-group">
                        <a href="https://youtu.be/8mei6uVttho" class="list-group-item list-group-item-action">
                            Vídeo - Introdução a Algoritmos - Algoritmos #01 </a>
                        <a href="https://youtu.be/M2Af7gkbbro" class="list-group-item list-group-item-action"> Vídeo - Primeiro Algoritmo - Algoritmos #02 </a>
                        <a href="https://https://youtu.be/RDrfZ-7WE8c" class="list-group-item list-group-item-action"> Vídeo - Comando de Entrada e Operadores - Algoritmos #03 </a>
                        <a href="https://youtu.be/Ig4QZNpVZYs" class="list-group-item list-group-item-action"> Vídeo - Operadores Lógicos e Relacionais - Algoritmos #04 </a>
                        <a href="https://youtu.be/GrPkuk1ezyo" class="list-group-item list-group-item-action"> Vídeo - Introdução ao Scratch - Algoritmos #05</a>
                        <a href="https://youtu.be/v2nCgGSVCeE" class="list-group-item list-group-item-action"> Vídeo - Exercícios de Algoritmo Resolvidos - Algoritmos #06 </a>
                        <a href="https://youtu.be/_g05aHdBAEY" class="list-group-item list-group-item-action"> Vídeo - Estruturas Condicionais 1 - Algoritmos #07 </a>
                        <a href="https://youtu.be/7gGFHzqh4d8" class="list-group-item list-group-item-action"> Vídeo - Estruturas Condicionais 2 - Algoritmos #08 </a>
                        <a href="https://youtu.be/U5PnCt58Q68" class="list-group-item list-group-item-action"> Vídeo - Estruturas de Repetição 1 - Algoritmos #09 </a>
                        <a href="https://youtu.be/fP49L1i_-HU" class="list-group-item list-group-item-action"> Vídeo - Estruturas de Repetição 2 - Algoritmos #10 </a>
                        <a href="https://youtu.be/WJQz20i7CyI" class="list-group-item list-group-item-action"> Vídeo - Estruturas de Repetição 3 - Algoritmos #11 </a>
                        <a href="https://youtu.be/KoNehy7rn8U" class="list-group-item list-group-item-action"> Vídeo - Procedimentos - Algoritmos #12 </a>
                        <a href="https://youtu.be/-nNx7e8GzHQ" class="list-group-item list-group-item-action"> Vídeo - Funções - Algoritmos #13 </a>
                        <a href="https://youtu.be/j9473xQ39vY?list=RDCMUCrWvhVmt0Qac3HgsjQK62FQ" class="list-group-item list-group-item-action"> Vídeo - Vetores - Algoritmos #14 </a>
                        <a href="https://youtu.be/hkE9WrjpAAk" class="list-group-item list-group-item-action"> Vídeo - Matrizes - Algoritmos #15 </a>
                        <a href="https://www.cursoemvideo.com/" class="list-group-item list-group-item-action"> Cursos - Cursos de Tecnologia Gratuitos </a> 
                    </div>
                </div>
            </div>
        </article>

      <br>
      
      <?php if($_SESSION["progresso"] < 4) { ?>

        <!-- Detalhe: o link passado contém o parâmetro "nível", com o valor de 3 -->
        <a class="btn-complete-nvl" href="./add-nivel.php?nivel=3">
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

<script type="text/javascript" src="../script.js"></script>