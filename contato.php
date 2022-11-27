<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body id="contato">
        <?php include_once('php/header.php'); ?>

        
        <main class="container">
            <h3 class="row justify-content-center m-3 fs-1">Contato</h3>
        
            <div class="row justify-content-start align-items-center d-flex">                
                <form class="col-sm-6 col-md-6 col-lg-8 my-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Escreva pra gente:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" placeholder="Escreva sua dúvida" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="button" class="gap-2 col-4 mx-auto btn-dark rounded">Enviar</button>
                </form>
                
                <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="col-12 card card-home mb-3 p-4">
                            <h3 class="card-title">Redes Sociais</h3>
                            <ul class="list-group">
                                <li class="no-point list-group-item border-0 p-0"><a href="#" class="no-line btn"><i class="bi bi-instagram"> Instagram</i></a></li>
                                <li class="no-point list-group-item border-0 p-0"><a href="#" class="no-line btn"><i class="bi bi-facebook"> Facebook</i></a></li>
                                <li class="no-point list-group-item border-0 p-0"><a href="#" class="no-line btn"><i class="bi bi-twitter"> Twitter</i></a></li>
                            </ul>
                        </div> 
                </div>
            </div>
        </main>
            
            
        <div class="container g-0">
            <article>
                <h1 class="text-center">Quem Somos</h1>
                <div class="border border-1 d-flex flex-md-row flex-column align-items-center">
                    <img src="imagens/ufc.png" class="img-fluid img-thumbnail col-sm-4 col-md-4 col-lg-3 border-0" alt="Logo do Grupo">
                    <p class="p-md-4 p-2 text-justify">Somos os Ursinhos Felizes em Chamas, mas pode nos chamar por UFC, o grupo é formado por Daniel, Jaquelini, José Guilherme, Sthefani e Giovana, um grupo novo com quatro pessoas totalmente distintas e que até então não tinham trabalhados juntos, mas com o mesmo intuito de trabalho, fazer um portal informativo, um portal onde o eleitor possa entender melhor sobre o modelo político de nosso país, quais as funções de cada cargo e seus futuros candidatos, para que ele saia mais consciente do valor de seu voto. E essa foi a nossa meta desde a primeira reunião, todos respectivos para as propostas de ideias, ajudando uns aos outros em suas dificuldades para que o resultado seja o melhor possível para você leitor, abaixo você encontrará mais sobre cada um dos membros, curiosidades, funções etc.</p>
                    
                </div>
            </article>
            <aside class="row d-flex justify-content-center align-items-start p-4">
                <div class="card col-sm-12 col-md-6 col-lg-2 mx-1">
                    <img src="imagens/daniel.jpg" class="card-img-top py-2" alt="Daniel">
                    <div class="card-body">
                        <p class="card-text">Daniel</p>
                        <p class="card-text">O Integrante que inventa problema para o resto do time. Gosto de
                            <i>streams</i>, jogos e, quando sobra tempo, de escrever histórias. Adoro enigmas e desafios que
                            me façam pensar. Demoro muito para aderir a uma causa, mas depois também não abandono por nada
                            desse mundo.</p>
                        <p class="card-text">RA: 2650832123013</p>
                        <p class="card-text">Função do Grupo: O cara que gostou do Bootstrap</p>
                        <ul class="no-space">
                            <li><a href="linha_do_tempo.php">Linha do Tempo dos Presidentes</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 col-md-6 col-lg-2 mx-1">
                    <img src="imagens/jaque.jpg" class="card-img-top py-2" alt="integrante do grupo, Jaquelini">
                    <div class="card-body">
                        <p class="card-text">Jaquelini</p>
                        <p class="card-text">A Integrante que reprime a criatividade dos outros integrantes. Gosta de maratonar animes e séries. Seus filmes preferidos são Matrix, Senhor dos Anéis e Harry Potter. Seus passatempos são cantar e jogar e de vez em quando estudar.</p>
                        <p class="card-text">RA: 2650832123022</p>
                        <p class="card-text">Função do Grupo: Destruidora de Criatividade, Menos é Mais</p>
                        <ul class="no-space">
                            <li><a href="tripartite.php">Tripartite</a></li>
                            <li><a href="galeria-juizes.php">Galeria de Juizes</a></li>
                            <li><a href="normas-de-uso.php">Normas de Uso</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 col-md-6 col-lg-2 mx-1">
                    <img src="imagens/guilherme.jpg" class="card-img-top py-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">José Guilherme</p>
                        <p class="card-text">O integrante mais calmo do grupo. Gosto muito de estar com os meus amigos, conversando, fazendo um churrasco etc. Gosto de cozinhar, ir ao cinema e em alguns momentos ficar sozinho enquanto escuto uma música e fumo meu charuto.</p>
                        <p class="card-text">RA: 2650832123019</p>
                        <p class="card-text">Função do Grupo: Pesquisa dos candidatos </p>
                        <ul class="no-space">
                            <li><a href="presidente.php">Pré-Candidatos Presidência</a></li>
                            <li><a href="senador.php">Pré-Candidatos Senado</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 col-md-6 col-lg-2 mx-1">
                    <img src="imagens/sthefani.jpg" class="card-img-top py-2" alt="Sthefani">
                    <div class="card-body">
                        <p class="card-text">Sthefani</p>
                        <p class="card-text">A integrante mais estressada e desesperada. Nas horas vagas gosta de maratonar séries, jogar videogames e jogos de tabuleiro com os amigos. Temáticas preferidas: zumbis, investigação, terror, piratas e xianxia.</p>
                        <p class="card-text">RA: 2650832123006</p>
                        <p class="card-text">Função do Grupo: Pesquisa, design, ajudante de git, edição de imagens, "maluca"
                            das padronizações. </p>
                        <ul class="no-space">
                            <li><a href="cargos.php">Cargos</a></li>
                            <li><a href="partidos.php">Partidos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 col-md-6 col-lg-2 mx-1">
                    <img src="imagens/gi.jpg" class="card-img-top py-2" alt="Sthefani">
                    <div class="card-body">
                        <p class="card-text">Giovana</p>
                        <p class="card-text">A integrante agregada. Nas horas vagas gosta de pensar em todos os problemas e se desesperar como se não houvesse amanhã. Tem a risada mais alta do grupo e sempre tenta não incomodar. Se possível, sempre focada nas tarefas a fazer e quase nunca falta as aulas.</p>
                        <p class="card-text">RA: 2650832123032</p>
                        <p class="card-text">Função do Grupo: Ajudante de git, surtada pelo codigo não funcionar, xingadora oficial de tudo. </p>
                        <ul class="no-space">
                            <li><a href="cidadania.php">Cidadania</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </div>
                </div>

            </aside>
        </div>
        <p class="text-center m-0 my-2"><a href="contato.php" class="btn btn-dark">Voltar ao topo</a></p>

        <?php include_once('php/footer.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>
