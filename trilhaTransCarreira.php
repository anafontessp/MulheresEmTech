<?php 
session_start();
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
  header("Location: index.php");
}

include('cabecalho.php'); 

?>

<center><h4>Transição profissional e os primeiros passos para planejar sua mudança de carreira.</h4></center>
<br>

<!-- cards com vídeos de apresentação -->
<div class="container"> 
<section class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <article class="col">
        <div class="card h-100 border-color">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/pD0bIsqvzlM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <div class="card-body">
                <h5 class="card-title">Transição de Carreiras</h5>
                <p class="card-text"> Transição de carreira não deve ser feita no impulso, sem planejamento, é necessário se planejar, se preparar, saber analisar o mercado e ter paciência, 
                    pois ela pode ser um processo de curto, médio ou longo prazo. Nesse vídeo você já pode iniciar seu planejamento de carreira com foco na transição profissional.</p>
                    </div>
                    </div>
                    </article>
                    <article class="col">
                        <div class="card h-100 border-color">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/LhyOd2NGvk0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                            <div class="card-body">
                                <h5 class="card-title">Mudança de Profissão</h5>
                                <p class="card-text">O que fazer quando chegamos a conclusão que precisamos (ou queremos) mudar de carreira, profissão? Será que precisa fazer uma nova graduação? O mercado vê isso com bom olhos?
                                    E se eu sou empreendedor e decido voltar a CLT? Muitas dúvidas e com razão, mudar de carreira é um processo que precisa de planejamento, organização e paciência, porque dependendo da transição
                                    de carreira pode ser em curto, médio ou longo prazo.</p>
                            </div>
                        </div>

                    </article>
            <article class="col">
                <div class="card h-100 border-color">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/IqLtEq_t0nc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">Mudança de Profissão Pós 30</h5
                            <p class="card-text">Neste vídeo temos uma visão da Dra. Ana Beatriz Barbosa apenas como caráter educativo sobre a transição de carreira após os 30 anos, ela é entrevistada pelo
                            canal Mentes em Pauta do Youtube</p>

                        </div>
                </div>
            </article>

    </section>

</div>

<section>

<center><h4>Olá <?php echo $_SESSION['user_name'] ?>, comece a estudar com as Trilhas_Tech.</h4></center>
<br>
</section>


<!-- trilhas de aprendizagem -->
<div class="container">
            <h2 class="fonte-titulo mt-5">Transição Profissional</h2>
            <hr>
            <p>Começar a transição de carreira profissional envolve planejamento e uma organização
            cuidadosa. Vamos apresentar nesse curso um guia com algumas dicas para ajudar você no 
            início dessa jornada.
            Ao longo da transição de carreira, esteja aberto a aprender com a experiência. 
            Esteja disposto a adaptar sua trilha de aprendizagem com base no feedback recebido, 
            nas oportunidades que surgirem e nas mudanças do mercado. 
            </p>
            <h2 class="fonte-titulo mt-5">Trilhas de Transição de Carreira</h2>
            <hr>
            <!-- utilizando accordion -->
            <section class="accordion" id="accordionExample">
                <article class="accordion-item">
                    <h2 class="accordion-header" id="trilha1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseUm" aria-expanded="false" aria-controls="collapseUm">
                            Trilha 1 - Guia com dicas para começar sua transição profissional
                        </button>
                    </h2>
                    <div id="collapseUm" class="accordion-collapse collapse" aria-labelledby="trilha1"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Defina seus objetivos:
                            Identifique o motivo pelo qual você deseja fazer uma transição de carreira
                            e estabeleça objetivos claros. Isso ajudará a orientar sua trilha de 
                            aprendizagem e mantê-lo focado.
                               2. Pesquise sobre a nova área:
                            Realize pesquisas aprofundadas sobre a área em que você deseja fazer a 
                            transição. Entenda as tendências, as oportunidades disponíveis, as 
                            habilidades exigidas e os desafios envolvidos.


                            </p>
                            <div class="list-group">
                                <a href="https://www.educlub.com.br/40-ideias-para-ensinar-alfabeto-brincando-criar-as-letras/ "
                                    class="list-group-item list-group-item-action">
                                    Artigo - 40 ideias para ensinar o alfabeto brincando
                                </a>
                                <a href="https://www.dentrodahistoria.com.br/blog/educacao/alfabetizacao-e-leitura/8-formas-ensinar-o-alfabeto-de-forma-ludica/"
                                    class="list-group-item list-group-item-action"> Artigo - 8 formas de ensinar o
                                    alfabeto de
                                    forma lúdica</a>
                                <a href="https://www.techtudo.com.br/listas/2019/07/cinco-jogos-de-alfabetizacao-online-para-celulares.ghtml"
                                    class="list-group-item list-group-item-action"> Artigo - Cinco jogos de
                                    alfabetização online
                                    para celulares Android e iPhone</a>
                                <a href="https://www.youtube.com/watch?v=HQgsbujkalw"
                                    class="list-group-item list-group-item-action"> Vídeo - 10 brincadeiras para ensinar
                                    o alfabeto para seu filho</a>
                                <a href="https://play.google.com/store/apps/details?id=com.binibambini.drawabc"
                                    class="list-group-item list-group-item-action"> APP - ABC Jogos de desenhar</a>
                                <a href="https://wordwall.net/pt/resource/14173020/jogo-do-alfabeto"
                                    class="list-group-item list-group-item-action"> Jogo - JOGO DO ALFABETO</a>
                                <a href="https://wordwall.net/pt/resource/16863118/jogo-do-alfabeto"
                                    class="list-group-item list-group-item-action"> Jogo - JOGO DO ALFABETO</a>
                                <a href="https://drive.google.com/file/d/1BYvVeJ_l6uaFYt2C6_jW4gAwGBOHaQF6/view"
                                    class="list-group-item list-group-item-action"> Lista de atividades </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="accordion-item">
                    <h2 class="accordion-header" id="trilha2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseDois" aria-expanded="false" aria-controls="collapseDois">
                            Trilha 2 - Antecessor e sucessor
                        </button>
                    </h2>
                    <div id="collapseDois" class="accordion-collapse collapse" aria-labelledby="trilha2"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Trabalhe os conceitos “antecessor e sucessor”, estimulando o desenvolvimento do
                                raciocínio lógico das crianças e incentivando a elaboração de estratégias para resolver
                                os desafios. O objetivo desta trilha é fixar a aprendizagem dos conceitos “antecessor” e
                                “sucessor” e estimular o aluno a reconhecer regularidades em sequências numéricas
                                relativas a antecessor e sucessor.
                            </p>
                            <div class="list-group">
                                <a href="https://novaescola.org.br/planos-de-aula/fundamental/2ano/matematica/jogo-das-10-cartas/698 "
                                    class="list-group-item list-group-item-action">
                                    Artigo - Plano de aula: Jogo das 10 cartas
                                </a>
                                <a href="https://escoladossonhosclaudia.blogspot.com/2020/03/plano-de-aula-sucessor-e-antecessor.html"
                                    class="list-group-item list-group-item-action"> Artigo - Plano de aula antecessor e
                                    sucessor</a>
                                <a href="https://www.youtube.com/watch?v=GkvSlQRJagw"
                                    class="list-group-item list-group-item-action"> Vídeo - Antecessor e sucessor</a>
                                <a href="https://play.google.com/store/apps/details?id=com.appsbergman.matematica"
                                    class="list-group-item list-group-item-action"> APP - Pequena Matemática</a>
                                <a href="https://www.escolagames.com.br/jogos/antecessorSucessor/"
                                    class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                                <a href="https://wordwall.net/pt/resource/2521940/antecessor-e-sucessor"
                                    class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                                <a href="https://wordwall.net/pt/resource/19434706/antecessor-e-sucessor"
                                    class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                                <a href="https://lereaprender.com.br/atividades-de-matematica-do-2o-ano/atividades-de-matematica-2ano-antecessor-e-sucessor/"
                                    class="list-group-item list-group-item-action"> Lista de atividades </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="accordion-item">
                    <h2 class="accordion-header" id="trilha3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                            Trilha 3 - Sistema Solar
                        </button>
                    </h2>
                    <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="trilha3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>O Sistema Solar é um tema amplo e que desperta a curiosidade dos alunos. É muito
                                importante que os alunos reflitam sobre a grandeza do espaço, descobrindo que nosso
                                pequeno planeta é precioso, pois abriga a única forma de vida que conhecemos atualmente,
                                e que para preservá-la é necessário conhecê-la e compreendê-la.

                                Nesta trilha de aprendizagem o professor deverá instigar a participação dos alunos para
                                que desperte neles ainda mais a curiosidade em entender o Sistema Solar. Os alunos
                                conhecerão os planetas do Sistema Solar, bem como sua composição, estrutura e
                                localização. Deverão ser abordadas todas as características e evidenciada a amplitude e
                                complexidade do universo. Eles serão estimulados a desenvolver as capacidades de
                                observação, comparação e classificação do nosso planeta dentro da Galáxia. E assim,
                                fixar conhecimento adquirido em sala de aula.
                            </p>
                            <div class="list-group">
                                <a href="https://mundoeducacao.uol.com.br/geografia/sistema-solar.htm"
                                    class="list-group-item list-group-item-action">
                                    Artigo - O sistema solar
                                </a>
                                <a href="https://brasilescola.uol.com.br/geografia/sistema-solar.htm"
                                    class="list-group-item list-group-item-action"> Artigo - Sistema Solar </a>
                                <a href="https://escolakids.uol.com.br/geografia/sistema-solar.htm"
                                    class="list-group-item list-group-item-action"> Artigo - Sistema Solar</a>
                                <a href="https://www.youtube.com/watch?v=-oie4EFLs_0"
                                    class="list-group-item list-group-item-action"> Vídeo - O Sistema Solar em 3D para
                                    crianças</a>
                                <a href="https://play.google.com/store/apps/details?id=com.vitotechnology.StarWalkKids2"
                                    class="list-group-item list-group-item-action"> APP - Astronomia para crianças</a>
                                <a href="https://www.escolagames.com.br/jogos/sistemaSolar/"
                                    class="list-group-item list-group-item-action"> Jogo - Sistema Solar</a>
                                <a href="https://wordwall.net/pt/resource/2521940/antecessor-e-sucessor"
                                    class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                                <a href="https://wordwall.net/pt/resource/19434706/antecessor-e-sucessor"
                                    class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                                <a href="https://www.soescola.com/2016/11/sequencia-didatica-sistema-solar-2-ano.html"
                                    class="list-group-item list-group-item-action"> Lista de atividades </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="accordion-item">
                    <h2 class="accordion-header" id="trilha4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseQuatro" aria-expanded="false" aria-controls="collapseQuatro">
                            Trilha 4 - O mapa do Brasil
                        </button>
                    </h2>
                    <div id="collapseQuatro" class="accordion-collapse collapse" aria-labelledby="trilha4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Nesta trilha o professor aprenderá como abordar o tema mapa político do Brasil, trazendo
                                a localização de cada um dos estados brasileiros e também o nome de suas capitais. É
                                adequado para estimular a aprendizagem dos alunos, fazendo com que aprendam o conteúdo
                                de forma divertida e dinâmica.
                                Os mapas de um modo geral são instrumentos de representação do espaço físico. Isso
                                significa que eles reproduzem uma determinada área do espaço para que assim possamos nos
                                localizar nessa localidade, saber onde ela se encontra ou obter informações diversas a
                                respeito.
                            </p>
                            <div class="list-group">
                                <a href="https://atividadesprofessores.com.br/regioes-do-brasil/"
                                    class="list-group-item list-group-item-action">
                                    Artigo - Regiões do Brasil: Quais São? Mapas, Características, Estados e Capitais
                                </a>
                                <a href="https://educador.brasilescola.uol.com.br/estrategias-ensino/plano-aula-acerca-posicao-geografica-brasil.htm"
                                    class="list-group-item list-group-item-action"> Artigo - Plano de aula acerca da
                                    posição geográfica do Brasil </a>
                                <a href="https://www.youtube.com/watch?v=pDgRa5vltWw"
                                    class="list-group-item list-group-item-action"> Vídeo - Regiões do Brasil |
                                    Localização dos estados | Mapa do Brasil </a>
                                <a href="https://www.youtube.com/watch?v=_wuU_61Sp3w"
                                    class="list-group-item list-group-item-action"> Mapa do Brasil completo e suas
                                    regiões - Para crianças - vídeo educativo </a>
                                <a href="https://play.google.com/store/apps/details?id=epic.brazil.capital"
                                    class="list-group-item list-group-item-action"> APP - Mapa do Brasil</a>
                                <a href="https://www.escolagames.com.br/jogos/papagaioBrasil/"
                                    class="list-group-item list-group-item-action"> Jogo - Papagaio Brasil</a>
                                <a href="https://wordwall.net/pt/resource/32798792/mapa-do-brasil-orienta%C3%A7%C3%A3o"
                                    class="list-group-item list-group-item-action"> Jogos - Mapa do Brasil</a>
                                <a href="https://colegiomesquita.com.br/atividade_digital/4ano/Atividade%20Geografia%20-%20%204%C2%BA%20ano%20A,%20W%20e%20B.pdf"
                                    class="list-group-item list-group-item-action"> Lista de atividades </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="accordion-item">
                    <h2 class="accordion-header" id="trilha5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                            Trilha 5 - Descobrimento do Brasil
                        </button>
                    </h2>
                    <div id="collapseCinco" class="accordion-collapse collapse" aria-labelledby="trilha5"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Nesta trilha o professor aprenderá como repassar o conhecimento sobre o descobrimento do
                                Brasil de forma lúdica e com a utilização de vários recursos tecnológicos.
                            </p>
                            <div class="list-group">
                                <a href="https://escolakids.uol.com.br/historia/descobrimento-do-brasil.htm"
                                    class="list-group-item list-group-item-action">
                                    Artigo - Descobrimento do Brasil
                                </a>
                                <a href="https://blog.escolavereda.com.br/podemos-falar-em-descobrimento-do-brasil/"
                                    class="list-group-item list-group-item-action"> Artigo - Podemos falar em
                                    descobrimwnto do Brasil</a>
                                <a href="https://www.youtube.com/watch?v=6Y9coj_0R9Q"
                                    class="list-group-item list-group-item-action"> Vídeo - Aula de História:
                                    Descobrimento do Brasil</a>
                                <a href="https://play.google.com/store/apps/details?id=com.historyisfun.brazilhistory"
                                    class="list-group-item list-group-item-action"> APP - Historia do Brasil </a>
                                <a href="https://wordwall.net/pt/resource/32998568/jogo-de-historia"
                                    class="list-group-item list-group-item-action"> Jogo - Historia do Brasil</a>
                                <a href="https://www.escolagames.com.br/jogos/descobrimentoDoBrasil/"
                                    class="list-group-item list-group-item-action"> Jogos - Descobrimento so Brasil</a>
                                <a href="https://acessaber.com.br/atividade-de-historia-descobrimento-do-brasil-2/  "
                                    class="list-group-item list-group-item-action"> Lista de atividades</a>

                            </div>
                        </div>
                    </div>
                </article>
            </section>

<?php include('rodape.php'); ?>