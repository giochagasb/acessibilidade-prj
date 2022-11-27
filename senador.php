<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/icon-menu48x48.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="css/style.css">

    <title>Pré Candidatos ao Senado</title>
</head>

<body id="senado">

    <?php include_once('php/header.php'); ?>

    <div class="container my-5 g-0">
        <div class="col-12">
            <img src="imagens/camara.jpg" class="img-fluid rounded mx-auto d-block" alt="Foto camara dos Deputados"
                id="camara-senado">
        </div>
        <div class="row p-4">
            <h1 class="text-center mb-4">Pré-Candidatos ao Senado</h1>
            <p>Agora chegamos no momento de falar quem são os pré-candidatos para a eleição que acontecerá em outubro de 2022. Iremos listar alguns dos principais candidatos ao cargo de Senadores. Falaremos um pouco de suas trajetórias política.</p>
            <p>Por se tratar de pré-candidatura até o presado momento não obtivemos informações sobre suas propostas, mas você pode conferir com mais detalhes quais são suas funções em nossa página <a href="cargos.php" id="funcoes">Cargos</a>.
            </p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1" style="width: 270px;">
                <img src="imagens/sergio-moro.jpg" class="card-img-top" alt="Foto Sergio Moro">
                <div class="card-body">
                    <h5 class="card-title text-center">Sergio Moro</h5>
                    <p class="card-text">Sérgio Fernando Moro ex-juiz da polícia federal ficou nacionalmente conhecido por atuar nos casos de grande destaque da Lava Jato</p>
                </div>
                <ul class="list-group list-group-flush">
                </ul>
                <div class="card-body">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-1">
                        Veja mais
                    </button>
                    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="ModalLabel-1"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel-1">Sergio Moro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Sérgio Fernando Moro ex-juiz da polícia federal ficou nacionalmente conhecido por atuar nos casos de grande destaque da Lava Jato, que foi considerado a maior e a mais duradora operação contra corrupção no âmbito federal, outros casos se destacam em sua carreira como juiz dentre elas a operação do Farol Colina nas investigação sobre o Banco do Estado do Paraná e o desdobramento do primeiro onde houve a condenação do traficante Fernandinho Beira Mar. Em 2019 entra pra o seu cargo com maior destaque, a convite do Presidente Jair Messias Bolsonaro a assumir o cargo de Ministro da Justiça, porém, em 2020 ele renúncia. Sérgio Moro não havia pronunciado nenhuma proposta e no dia 31 de março ele anuncia oficialmente a sua desistência de sua pré-candidatura à presidência.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1" style="width: 270px;">
                <img src="imagens/carlos-moises.jpg" class="card-img-top" alt="Foto Carlos Moises">
                <div class="card-body">
                    <h5 class="card-title text-center">Carlos Moises</h5>
                    <p class="card-text">Carlos Moisés da Silva, possui como formação um bacharelado em direito; profissão que acabou não seguindo por força</p>
                </div>
                <ul class="list-group list-group-flush">
                </ul>
                <div class="card-body">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal-2">
                        Veja mais
                    </button>
                    <div class="modal fade" id="Modal-2" tabindex="-1" aria-labelledby="ModalLabel-2"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel-2">Carlos Moises</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Carlos Moisés da Silva, possui como formação um bacharelado em direito;
                                        profissão que acabou não seguindo por
                                        força das circunstâncias. Iniciou a sua carreira profissional como
                                        membro do Corpo de Bombeiros Militar de
                                        Santa Catarina (de 1987 a 1990), após ter concluído o Curso de Formação
                                        de Oficiais da Academia de Polícia.
                                        Outras funções executadas por Carlos Moisés foram as de Coordenador
                                        Regional de Defesa Civil,
                                        Corregedor-Adjunto do Corpo de Bombeiros de Santa Catarina, Secretário
                                        de Justiça e Cidadania, até chegar a
                                        coronel do Corpo de Bombeiros, onde aposentou-se. Na sua trajetória
                                        política no ano de 2018, filiou-se ao
                                        Partido Social Liberal (PSL), disputou eleições ao cargo de Governador
                                        do Estado de Santa Catarina, fez
                                        campanha como “Comandante Moisés” foi a ida ao segundo turno das
                                        eleições para governador de Santa Catarina
                                        na 2ª colocação, com simplórios 29,72% dos votos no 1º turno, para ao
                                        final sair vitorioso com nada mais
                                        nada menos do que 70% dos votos válidos na disputa com Gelson Merisio do
                                        PSD. No início de 2022, com o fim
                                        do partido PSL, que se juntou ao DEM para fundar o União Brasil, o
                                        Governador mudou de partido, a partir de
                                        março do ano que concorrerá à reeleição, passou para a sigla
                                        Republicanos.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1" style="width: 270px;">
                <img src="imagens/flavia-arruda.jpg" class="card-img-top" alt="Fot Flávia Arruda">
                <div class="card-body">
                    <h5 class="card-title text-center">Flávia Arruda</h5>
                    <p class="card-text">Flávia Carolina Péres, mais conhecida como Flávia Arruda, filiada ao
                        Partido Liberal (PL) e presidente da
                        sigla do Distrito Federal.</p>
                </div>
                <ul class="list-group list-group-flush">
                </ul>
                <div class="card-body">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal-3">
                        Veja mais
                    </button>
                    <div class="modal fade" id="Modal-3" tabindex="-1" aria-labelledby="ModalLabel-3"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel-3">Flávia Arruda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Flávia Carolina Péres, mais conhecida como Flávia Arruda, filiada ao Partido Liberal (PL) e presidente da sigla do Distrito Federal. Foi ministra-chefe da Secretaria de Governo do Brasil de 2021 a 2022. Flávia trabalhou em Taguatinga por um período, até decidir montar uma escola, no Recanto das Emas. Casada com o político José Roberto Arruda, é mãe de duas filhas. Em 2019, concluiu o curso de Direito. Em 2021, foi eleita presidente da Comissão Mista de Planos, Orçamentos Públicos e Fiscalização (CMO) do Congresso Nacional. No mesmo ano, foi nomeada Ministra-chefe da Secretaria de Governo do Brasil. Em sua primeira incursão na política, Flávia tornou-se vice-governadora na chapa de Jofran Frejat. Isso ocorreu devido à Justiça Eleitoral indeferir a candidatura a governador de seu companheiro, José Roberto Arruda, após ter sido de preso de maneira preventiva pelo seu envolvimento no Mensalão do DEM. Com 428.522 votos, a chapa ficou em segundo lugar, sendo derrotada para Rodrigo Rollemberg do Partido Socialista Brasileiro (PSB). Nas eleições distritais de 2018 foi eleita deputada federal pelo Distrito Federal e obteve 121.340 votos totalizados (8,43% dos votos válidos), sendo a deputada mais votada para o cargo.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1" style="width: 270px;">
                <img src="imagens/marilia-arraes.jpg" class="card-img-top" alt="Foto Marília Arraes">
                <div class="card-body">
                    <h5 class="card-title text-center">Marília Arraes</h5>
                    <p class="card-text">Marília Valença Rocha Arraes de Alencarmais conhecida como Marília
                        Arraes, é uma advogada e política
                        brasileira, filiada ao Solidariedade. </p>
                </div>
                <ul class="list-group list-group-flush">
                </ul>
                <div class="card-body">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal-4">
                        Veja mais
                    </button>
                    <div class="modal fade" id="Modal-4" tabindex="-1" aria-labelledby="ModalLabel-4"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel-4">Marília Arraes</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Marília Valença Rocha Arraes de Alencar mais conhecida como Marília Arraes, é uma advogada e política brasileira, filiada ao Solidariedade. Atualmente exerce o mandato de deputada federal por Pernambuco. É neta de Miguel Arraes. Filiou-se ao PSB em 2005, partido que foi presidido por Arraes. Marília sempre teve um trabalho ativo, militando em diversas campanhas socialistas. Durante o curso de direito, engajou-se no movimento estudantil, debatendo gênero e a pluralidade de direitos, além de trabalhar em projetos de melhorias para conservação do patrimônio da universidade. Aos 24 anos, elegeu-se vereadora do Recife com 9 533 votos, em 2012, reelegeu-se vereadora com 8 841 votos. Em outubro de 2016, Marília disputou novamente as eleições municipais foi eleita com 11 872 votos, uma das maiores votações da atual legislatura e uma das mais expressivas entre os parlamentares do PT nas regiões Nordeste, Norte, Sul e Centro-Oeste. Assumiu a liderança da bancada de oposição na Casa José Mariano, reafirmando sua posição política e sua luta ao lado do povo recifense em busca de uma cidade melhor. Comprometida com os ideais do partido, Marília esteve à frente do grupo de parlamentares e lideranças que coordenou toda a resistência contra o impeachment da ex-presidente Dilma Rousseff. Apoiada pela militância e por inúmeros setores da sociedade civil, entrou na disputa por uma vaga na Câmara Federal. Venceu com uma expressiva votação com 193 108 mil votos - a segunda parlamentar federal mais votada no estado nas eleições de 2018. É a quarta mulher eleita deputada federal na história de Pernambuco.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <p class="referencias-footer text-center m-0">
        <small class="paleta-preto-color ">Acesse também: <a class="paleta-preto-color fw-bold" href="referencias.php"
                target="_blank">Referências dessa página</a></small>
    </p>
    <p class="text-center m-0 my-2"><a href="senador.php" class="btn btn-dark">Voltar ao topo</a></p>

    <?php include_once('php/footer.php'); ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>