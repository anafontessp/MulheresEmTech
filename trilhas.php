<?php
session_start();
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: login.php");
}

include('cabecalho.php');

?>

<center>
<h4>Quero fazer transição de carreira para a área de tecnologia. <strong> E agora?</strong></h4>
</center>
<br>
<!-- banner -->
<section>
  <div class="container">
    <img class="trilhas" src="images/backgroundTrilhas" width= "100%" alt="">
  </div>
</section>
<br>

<!-- end banner -->

<section>

<?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
  <center><h4>Olá <?php echo $_SESSION['user_name']; ?>, venha estudar as Trilhas_Tech!</h4></center>

<?php } else { ?>
  
  <center><h4>Faça seu login para começar a estudar as trilhas</h4></center>

<?php } ?>
<br>
</section>

<!-- Início dos cards com as trilhas -->

<section class="main-section">
  <div class="main-02">

    <div class="card-link container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/transicao.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Transição Profissional</h4>
          <p class="card-text">Como iniciar minha transição de carreira com 30 anos? Por onde devo começar?</p>
          <div class="bottom-card" >
          <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
            <a href="./trilhas/trilhas-tech.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } else { ?>
            
            <a href="./login.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } ?>

        </div>
      </div>
      </div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/inspire.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Algoritmo</h4>
          <p class="card-text">O Curso de Algoritmo é a base necessária para quem quer aprender em linguagens famosas do mercado, como C, Java, PHP e muitas outras. </p>
          <div class="bottom-card" >
          <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
            <a href="./trilhas/nivel03.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } else { ?>
            
            <a href="./login.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } ?>

        </div>
      </div>
</div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/logica.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Lógica de Programação</h4>
          <p class="card-text">Conheça a base para ser um programador(a) e iniciar seu conhecimento em tecnologia.</p>
          <div class="bottom-card" >
          <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
            <a href="#" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } else { ?>
            
            <a href="./login.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } ?>
          
        </div>
      </div>
    </div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top" src="images/transicao.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">HTML5</h4>
          <p class="card-text">Aprenda HTML5, CSS3 e JavaScript enquanto monta um site completo com essas tecnologias.</p>
          <div class="bottom-card" >
          <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
            <a href="#" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } else { ?>
            
            <a href="./login.php" class="btn-trilha">
              <span>Começar agora</span>
            </a>

          <?php } ?>

        </div>
      </div>
    </div>

  </div>
</section>

<?php include('rodape.php'); ?>
