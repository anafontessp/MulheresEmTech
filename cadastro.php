<?php include('cabecalho.php'); ?>
<?php include("conexao.php"); ?>

<!--
<section>
    <form method="post" action="inserir-cadastro.php">
        <input type="text" placeholder="Nome Completo" name="txNome" />
        </br>
        </br>
        <input type="email" placeholder="Insira seu Email" name="txEmail" />
        </br>
        </br>
        <input type="password" placeholder="Senha" name="txSenha" />
        </br>
        </br>
        <input type="submit" value="Cadastrar" />
        </br>
        </br>   
        <div>
            <a href="login.php">Voltar</a>
        </div>
        
    </form>
    
</section>
-->

<div class="container-login">
        <div class="img-box">
            <img src="images/cadastro.png">
        </div>
        <div class="content-box">
            <div class="form-box">
                <h2>Cadastro</h2>
                <form method="post" action="inserir-cadastro.php">

                    <div class="input-box">
                        <span>Nome</span>
                        <input type="text" placeholder="Nome Completo" name="txNome" required />
                    </div>

                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" placeholder="Insira seu Email" name="txEmail" required />
                    </div>

                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" placeholder="senha" name="txSenha" required />
                    </div>

                    <div class="input-box">
                        <input type="submit" name="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('rodape.php'); ?>