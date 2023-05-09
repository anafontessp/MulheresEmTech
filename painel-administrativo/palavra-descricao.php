<?php include('painel-administrativo/cabecalho.php'); ?>
<section>
    <h1> Título </h1>
</section>

<section>
    <form>
        <div>
            <input type="text" placeholder="Palavra" />
        </div>

        <div>
            <input type="text" placeholder="Descrição" />
        </div>

        <div>
            <input type="text" placeholder="Imagem" />
        </div>

        <div>
            <input type="text" placeholder="Link" />
        </div>

        <div>
            <input type="submit" value="Salvar" />
        </div>
    </form>
</section>

<section>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Plavra</th>
        <th scope="col">Descrição</th>
        <th scope="col">Imagem</th>
        <th scope="col">Link</th>
        <th scope="col">Alterar</th>
        <th scope="col">Apagar</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>Editar</td>
        <td>Excluir</td>

        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>Editar</td>
        <td>Excluir</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>Editar</td>
        <td>Excluir</td>
        </tr>
    </tbody>
    </table>
</section>

<?php include('painel-administrativo/rodape.php'); ?>