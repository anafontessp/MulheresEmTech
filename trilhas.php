<?php 
session_start();

include('cabecalho.php'); 

?>

<center><h4>Transição profissional para a tecnologia. Primeiros passos para Planejar sua Mudança de Carreira.</h4></center>
<br>


<section>
<center><iframe width="1097" height="617" src="https://www.youtube.com/embed/pD0bIsqvzlM" title="TRANSIÇÃO DE CARREIRA - Primeiros passos para Planejar sua Mudança de Carreira" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
</section>
<br>
<br>


<section>

<?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
  <center><h4>Olá <?php echo $_SESSION['user_name']; ?>, venha estudar as Trilhas!</h4></center>

<?php } else { ?>
  
  <center><h4>Faça Login começar a estudar as trilhas</h4></center>

<?php } ?>
<br>
</section>

<section class="main-section">
  <div class="main-02">
      
    <div class="card-link container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top"src="images/Logo.png" alt="">
        <div class="card-body">
          <div>
            <h4 class="card-title">Trilhas_Tech</h4>
            <p class="card-text">Como iniciar seus estudos em Tecnologia?</p>
          </div>
          <div class="bottom-card" >
          <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            
            <a href="./trilhas/trilhas-tech.php" class="btn-trilha">
              <span>Iniciar Trilha</span>
            </a>

          <?php } else { ?>
            
            <a href="./login.php" class="btn-trilha">
              <span>Iniciar Trilha</span>
            </a>

          <?php } ?>
            <p class="card-saibamais"><a href="https://encurtador.com.br/azOUY" target="_blank">Conheça mais</a></p>
          </div>
        </div>
      </div>
    </a>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top"src="images/Logo.png" alt="">
        <div class="card-body">
          <div>
            <h4 class="card-title">Lógica de Programação</h4>
            <p class="card-text">Conheça a base para ser um bom programador(a) e iniciar seu conhecimento em tecnologia. </p>
          </div>
          <p class="card-saibamais"><a href="https://encurtador.com.br/myOQ0" target="_blank">Conheça mais</a></p>
        </div>
      </div>
    </div>

    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top"src="images/Logo.png" alt="">
        <div class="card-body">
          <div>
            <h4 class="card-title">Dicas</h4>
            <p class="card-text">Considerada uma das pioneiras da programação de computadores e criadora da linguagem de programação COBOL.</p>
          </div>
          <p class="card-saibamais"><a href="https://encurtador.com.br/rYZ25" target="_blank">Conheça mais</a></p>
        </div>
      </div>
    </div>
    
    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top"src="images/Logo.png" alt="">
        <div class="card-body">
          <div>
            <h4 class="card-title">Card teste</h4>
            <p class="card-text">Card criado somente para testes. Mudar nome e descrição do card assim que possível.</p>
          </div>
          <p class="card-saibamais"><a href="https://encurtador.com.br/rYZ25" target="_blank">Conheça mais</a></p>
        </div>
      </div>
    </div>
    
    <div class="container card-container mt-3">
      <div class="card" style="width:250px">
        <img class="card-img-top"src="images/Logo.png" alt="">
        <div class="card-body">
          <div>
            <h4 class="card-title">Card teste</h4>
            <p class="card-text">Card criado somente para testes. Mudar nome e descrição do card assim que possível.</p>
          </div>
          <p class="card-saibamais"><a href="https://encurtador.com.br/rYZ25" target="_blank">Conheça mais</a></p>
        </div>
      </div>
    </div>
    
  </div>
</section>

<?php include('rodape.php'); ?>