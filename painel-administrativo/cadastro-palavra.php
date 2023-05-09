<?php

    include('cabecalho-painel.php');
    include('verificacao-sessao.php');

    
?>

<section>
        <form method="post" action="inserir-usuario.php">
            <div>
                <input type="text" placeholder="Palavra" name="txpalavra" />
            </div>
            </br>
            <div>
                <input type="text" placeholder="Descrição" name="txDescricao" />
            </div>
            </br>
            <div>
                <input type="text" placeholder="imagem" name="txImagem" />
            </div>
            </br>
            <div>
                <input type="text" placeholder="link" name="txLink" />
            </div>
            </br>
            <div>
                <input type="submit" value="Cadastrar" />
            </div>

        </form>
    
    </section>