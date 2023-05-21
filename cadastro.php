<?php include('cabecalho.php'); ?>
<?php include("conexao.php"); ?>

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