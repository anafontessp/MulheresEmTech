<?php include('cabecalho.php'); ?>

<!--
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
-->

<div class="container-login">
        <div class="img-box">
            <img src="images/login.png">
        </div>
        <div class="content-box">
            <div class="form-box">
                <h2>Login</h2>
                <form method="POST" action="login-consulta.php">
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" placeholder="seuemail@mail.com" name="txEmail" required />
                    </div>

                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" placeholder="senha" name="txSenha" required />
                    </div>

                    <div class="input-box">
                        <input type="submit" name="submit" value="Entrar" required />
                    </div>

                    <div class="input-box">
                       <p>Não Tem Uma Conta? <a href="cadastro.php">Cadastre-se</a>
                    </div>
                </form>
            </div>
        </div>
</div>



<?php include('rodape.php'); ?>