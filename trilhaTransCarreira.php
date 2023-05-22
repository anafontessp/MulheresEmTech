<?php
session_start();
if (!isset($_SESSION["autorizacao"]) && !isset($_SESSION["user_name"])) {
    header("Location: index.php");
}

include('cabecalho.php');

?>

<br>
<center>
    <h4>Transição profissional e os primeiros passos para planejar sua mudança de carreira.</h4>
</center>
<br>
<br>

<!-- cards com vídeos de apresentação -->
<div class="container">
    <section class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <article class="col">
            <div class="card h-100 border-color">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/LhyOd2NGvk0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
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
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/IqLtEq_t0nc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Mudança de Profissão Pós 30</h5 <p class="card-text">Neste vídeo temos uma visão da Dra. Ana Beatriz Barbosa apenas como caráter educativo sobre a transição de carreira após os 30 anos, ela é entrevistada pelo
                    canal Mentes em Pauta do Youtube. Os vídeos desse canal são produzidos baseados na experiência da Dra. Ana Beatriz, na observação prática de pacientes e em pesquisas científicas
                    mais recentes até o momento.</p>

                </div>
            </div>
        </article>
        <article class="col">
            <div class="card h-100 border-color">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pD0bIsqvzlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                <div class="card-body">
                    <h5 class="card-title">Transição de Carreiras</h5>
                    <p class="card-text"> Transição de carreira não deve ser feita no impulso, sem planejamento, é necessário se planejar, se preparar, saber analisar o mercado e ter paciência,
                        pois ela pode ser um processo de curto, médio ou longo prazo. Nesse vídeo você já pode iniciar seu planejamento de carreira com foco na transição profissional.</p>
                        <br>
                </div>
            </div>
        </article>

    </section>

</div>

<section>
    
    <br>
    <center>
        <h4>Olá <?php echo $_SESSION['user_name'] ?>, comece a estudar com as Trilhas_Tech.</h4>
    </center>
</section>


<!-- trilhas de aprendizagem -->
<div class="container">
    <h2 class="fonte-titulo mt-5">Transição Profissional</h2>
    <hr>
    <p> Começar a transição de carreira profissional envolve planejamento e uma organização
        cuidadosa. Vamos apresentar nesse curso algumas dicas para ajudar você no
        início dessa jornada.
        Ao longo da transição de carreira, esteja aberto a aprender com a experiência.
        Esteja disposto a adaptar sua trilha de aprendizagem com base no feedback recebido,
        nas oportunidades que surgirem e nas mudanças do mercado.
    </p>
    <h2 class="fonte-titulo mt-5">Trilhas Transição de Carreira</h2>
    <hr>
    <!-- utilizando accordion -->
    <section class="accordion" id="accordionExample">
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUm" aria-expanded="false" aria-controls="collapseUm">
                    Trilha 1 - Como começar sua transição profissional
                </button>
            </h2>
            <div id="collapseUm" class="accordion-collapse collapse" aria-labelledby="trilha1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Definir seus objetivos e identificar os motivos pelos quais você deseja fazer uma transição de carreira
                        é muito importante antes de iniciar sua jornada. Esse curso ajudará a orientar sua trilha de
                        aprendizagem e manter o foco durante todo o processo. Nessa trilha, você explorará os principais
                        aspectos envolvidos na mudança de carreira e descobrirá estratégias para fazer uma transição bem-sucedida. <br>
                    </p>
                    <div class="list-group">
                        <a href="https://www.tuacarreira.com/transicao-de-carreira/" class="list-group-item list-group-item-action">
                            Artigo - Transição de carreira e planejamento: a chave do sucesso
                        </a>
                        <a href="https://www.voitto.com.br/blog/artigo/transicao-de-carreira" class="list-group-item list-group-item-action"> Artigo - Veja quando fazer uma Transição
                            de Carreira é a melhor opção e descubra como se preparar</a>
                        <a href="https://negocios.umcomo.com.br/artigo/transicao-de-carreira-quando-e-como-fazer-30292.html" class="list-group-item list-group-item-action"> Artigo - Transição de carreira: 
                            quando e como fazer</a>
                        <a href="https://www.youtube.com/watch?v=6Uz5li1qkmg" class="list-group-item list-group-item-action"> Vídeo - Cinco sinais que você precisa mudar de carreira </a>
                        <a href="https://evernote.com/intl/pt-br" class="list-group-item list-group-item-action"> APP - Ferramenta de organização pessoal</a>
                        <a href="https://store.steampowered.com/app/448280/Job_Simulator/" class="list-group-item list-group-item-action"> Jogo - Job Simulator </a>
                        <a href="https://estudos.vestibulares.com.br/cursos-de-ti" class="list-group-item list-group-item-action"> Teste Vocacional </a>
                        <a href="#" class="list-group-item list-group-item-action"> Guia prático </a>
                    </div>
                </div>
            </div>
        </article>
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDois" aria-expanded="false" aria-controls="collapseDois">
                    Trilha 2 - 10 mulheres para você se inspirar na sua carreira
                </button>
            </h2>
            <div id="collapseDois" class="accordion-collapse collapse" aria-labelledby="trilha2" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Historicamente, a desigualdade de gênero tem afetado a vida das mulheres. Se, no passado, elas eram reduzidas a uma única função,
                        a de cuidar da vida doméstica, pode-se dizer que hoje elas ocupam uma variedade muito maior de espaços. Mas, ainda assim, 
                        problemas ligados à desigualdade de gênero persistem, tal como os salários menores que os dos homens, mesmo ambos ocupando
                        o mesmo cargo. O Dia Internacional da Mulher é uma forma de reconhecer e celebrar a luta e as conquistas das mulheres. 
                        Pensando nisso, reunimos 10 mulheres referências em seus segmentos para você se inspirar na sua carreira. Confira abaixo 
                        a lista de grandes nomes e suas respectivas profissões.
                    </p>
                    <div class="list-group">
                        <a href="https://unifei.edu.br/personalidades-do-muro/extensao/enedina-alves/" class="list-group-item list-group-item-action">
                            Artigo - Enedina Alves - Engenheira Civil
                        </a>
                        <a href="https://www.youtube.com/watch?v=p3wpczJM2jg&t=1s" class="list-group-item list-group-item-action"> Vídeo - Homenagem à Enedina Alves</a>
                        <a href="https://www.ebiografia.com/zilda_arns/" class="list-group-item list-group-item-action"> Artigo - Zilda Arns: Médica</a>
                        <a href="https://agenciadenoticias.uniceub.br/destaque/45-anos-sem-bertha-lutz-quem-foi-a-cientista-e-ativista-revolucionaria/" class="list-group-item list-group-item-action">Artigo - Bertha Lutz - Bióloga</a>
                        <a href="https://www.soquimica.com.br/biografias/marie_curie/" class="list-group-item list-group-item-action"> Artigo - Marie Curie: Química</a>
                        <a href="https://www.youtube.com/watch?v=CooRJoRPsGk&t=1s" class="list-group-item list-group-item-action"> Vídeo - Você sabe quem foi Marie Curie?</a>
                        <a href="https://casacor.abril.com.br/profissionais/lina-bo-bardi-obras/" class="list-group-item list-group-item-action"> Artigo - Lina Bo Bardi: Arquiteta</a>
                        <a href="https://www.youtube.com/watch?v=9fwtwODu4bo&t=4s" class="list-group-item list-group-item-action"> Vídeo - Lina Bo Bardi: Influências e Heranças na Bahia</a>
                        <a href="https://www.cbdu.org.br/brasileiras-que-fizeram-historia-daiane-dos-santos/" class="list-group-item list-group-item-action"> Artigo - Daiane dos Santos: Atleta</a>
                        <a href="https://primeirosnegros.com/ida-b-wells-barnett-pioneira-na-cruzada-pela-justica-aos-negros-dos-eua/" class="list-group-item list-group-item-action"> Artigo - Ida B. Wells: Jornalista</a>
                        <a href="https://nationalgeographic.pt/historia/grandes-reportagens/2931-amelia-earhart-a-pioneira-que-se-perdeu-no-oceano" class="list-group-item list-group-item-action"> Artigo - Amelia Earhart: Aviadora</a>
                        <a href="https://www.ufrgs.br/enigma/margaret-hamilton/" class="list-group-item list-group-item-action"> Artigo - Margaret Heafield Hamilton: Cientista da Computação</a>
                        <a href="https://www.uc.pt/fctuc/dmat/departamento/bibliomat/servicos/matematicos/Noether-E" class="list-group-item list-group-item-action"> Artigo - Emmy Noether: Matemática</a>
                    </div>
                </div>
            </div>
        </article>
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                    Trilha 3 - Teste
                </button>
            </h2>
            <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="trilha3" data-bs-parent="#accordionExample">
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
                        <a href="https://mundoeducacao.uol.com.br/geografia/sistema-solar.htm" class="list-group-item list-group-item-action">
                            Artigo - O sistema solar
                        </a>
                        <a href="https://brasilescola.uol.com.br/geografia/sistema-solar.htm" class="list-group-item list-group-item-action"> Artigo - Sistema Solar </a>
                        <a href="https://escolakids.uol.com.br/geografia/sistema-solar.htm" class="list-group-item list-group-item-action"> Artigo - Sistema Solar</a>
                        <a href="https://www.youtube.com/watch?v=-oie4EFLs_0" class="list-group-item list-group-item-action"> Vídeo - O Sistema Solar em 3D para
                            crianças</a>
                        <a href="https://play.google.com/store/apps/details?id=com.vitotechnology.StarWalkKids2" class="list-group-item list-group-item-action"> APP - Astronomia para crianças</a>
                        <a href="https://www.escolagames.com.br/jogos/sistemaSolar/" class="list-group-item list-group-item-action"> Jogo - Sistema Solar</a>
                        <a href="https://wordwall.net/pt/resource/2521940/antecessor-e-sucessor" class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                        <a href="https://wordwall.net/pt/resource/19434706/antecessor-e-sucessor" class="list-group-item list-group-item-action"> Jogo - Antecessor e sucessor</a>
                        <a href="https://www.soescola.com/2016/11/sequencia-didatica-sistema-solar-2-ano.html" class="list-group-item list-group-item-action"> Lista de atividades </a>
                    </div>
                </div>
            </div>
        </article>
        <article class="accordion-item">
            <h2 class="accordion-header" id="trilha4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuatro" aria-expanded="false" aria-controls="collapseQuatro">
                    Trilha 4 - Teste
                </button>
            </h2>
            <div id="collapseQuatro" class="accordion-collapse collapse" aria-labelledby="trilha4" data-bs-parent="#accordionExample">
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
                        <a href="https://atividadesprofessores.com.br/regioes-do-brasil/" class="list-group-item list-group-item-action">
                            Artigo - Regiões do Brasil: Quais São? Mapas, Características, Estados e Capitais
                        </a>
                        <a href="https://educador.brasilescola.uol.com.br/estrategias-ensino/plano-aula-acerca-posicao-geografica-brasil.htm" class="list-group-item list-group-item-action"> Artigo - Plano de aula acerca da
                            posição geográfica do Brasil </a>
                        <a href="https://www.youtube.com/watch?v=pDgRa5vltWw" class="list-group-item list-group-item-action"> Vídeo - Regiões do Brasil |
                            Localização dos estados | Mapa do Brasil </a>
                        <a href="https://www.youtube.com/watch?v=_wuU_61Sp3w" class="list-group-item list-group-item-action"> Mapa do Brasil completo e suas
                            regiões - Para crianças - vídeo educativo </a>
                        <a href="https://play.google.com/store/apps/details?id=epic.brazil.capital" class="list-group-item list-group-item-action"> APP - Mapa do Brasil</a>
                        <a href="https://www.escolagames.com.br/jogos/papagaioBrasil/" class="list-group-item list-group-item-action"> Jogo - Papagaio Brasil</a>
                        <a href="https://wordwall.net/pt/resource/32798792/mapa-do-brasil-orienta%C3%A7%C3%A3o" class="list-group-item list-group-item-action"> Jogos - Mapa do Brasil</a>
                        <a href="https://colegiomesquita.com.br/atividade_digital/4ano/Atividade%20Geografia%20-%20%204%C2%BA%20ano%20A,%20W%20e%20B.pdf" class="list-group-item list-group-item-action"> Lista de atividades </a>
                    </div>
                </div>
            </div>
        </article>

    <?php include('rodape.php'); ?>