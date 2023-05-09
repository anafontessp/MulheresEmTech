<?php include('cabecalho.php'); ?>
<?php include("conexao.php") ?>

<section>
    <form method="post" action="inserir-cadastro.php">
        <input type="text" placeholder="Nome Completo" name="txNome" />
        </br>
        </br>
        <input type="email" placeholder="Insira seu Email" name="txEmail" />
        </br>
        </br>
        <input type="text" placeholder="Insira sua senha" name="txSenha" />
        </br>
        </br>
        <input type="submit" value="Cadastrar" />
        
    </form>
    
</section>