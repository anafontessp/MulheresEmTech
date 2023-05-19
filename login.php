<?php include('cabecalho.php'); ?>
<section>
        <form method="POST" action="login-consulta.php">
            <div>
                <input type="email" placeholder="Digite seu e-mail" name="txEmail" />
            </div>
            <br>
            <div>
                <input type="password" placeholder="senha" name="txSenha" />
            </div>
            <br>
            <div>
                <input type="submit" value="Acessar" />
            </div>
            <br>
            <div>
                Se você ainda não tem cadastro. 
                <a href="cadastro.php">Cadastre-se</a>
            </div>
        </form>
    
    </section>


<?php include('rodape.php'); ?>