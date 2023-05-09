<?php 
    include('cabecalho-painel.php');
    include('verificacao-sessao.php');

?>

    <section>
        <form method="post" action="inserir-usuario.php">
            <div>
                <input type="text" placeholder="Nome Usuario" name="nome" />
            </div>
            </br>
            <div>
                <input type="email" placeholder="Email Usuario" name="email" />
            </div>
            </br>
            <div>
                <input type="password" placeholder="Senha" name="senha" />
            </div>
            </br>
            <div>
                <input type="submit" value="Cadastrar" />
            </div>

        </form>
    
    </section>

    <section>
        <?php
            include("conexao.php");

            $stmt = $pdo -> prepare("select * from tbusuario");

            $stmt -> execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                echo $row['idUsuario'] . " ";
                echo $row['nome'] . " ";
                echo $row['email'] . " ";
                echo $row['senha'] . " ";
                echo $row['dtCadastro'];
            }

        ?>
    </section>




<?php include ('../rodape.php'); ?>