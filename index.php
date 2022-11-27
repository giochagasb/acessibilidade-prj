<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="imagens/icon-menu48x48.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
    <header class="bg-banner text-center">
        <img class="img-fluid" src="imagens/portal-intelecto.png" alt="Banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-banner">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="imagens/icon-menu48x48.png" alt="Logo do site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="cidadania.php">Cidadania</a></li>
                <li class="nav-item"><a class="nav-link" href="cargos.php">Cargos</a></li>
                <li class="nav-item"><a class="nav-link" href="tripartite.php">Tripartite</a></li>
                <li class="nav-item"><a class="nav-link" href="presidente.php">Presidente</a></li>
                <li class="nav-item"><a class="nav-link" href="senador.php">Senadores</a></li>
                <li class="nav-item"><a class="nav-link" href="partidos.php">Partidos</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria-juizes.php">Galeria Juízes</a></li>
                <li class="nav-item"><a class="nav-link" href="linha_do_tempo.php">Linha do Tempo</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="container my-2">

        <article class="d-flex flex-wrap my-3 justify-content-lg-evenly">
            <div class="align-self-center col-md-6 p-4">
                <h1>Bem Vindo</h1>
                <p class="text-justify">Portal Intelecto foi desenvolvido como um porta-voz à todos os brasileiros que
                    desejam conhecer mais sobre a
                    democracia presidencialista no Brasil. Além de oferecer o conteúdo teórico e histórico de forma
                    leve, também
                    unifica em uma só
                    plataforma os partidos, candidaturas e propostas atuais do país.</p>
            </div>

            <img class="img-fluid" src="imagens/img-home.jpg" alt="Pessoa discursando">

        </article>

        <div class="d-flex flex-wrap justify-content-md-between justify-content-lg-evenly">

            <div class="col-md-4 d-flex flex-column align-items-center justify-content-sm-center">
                <section class="card card-home mb-3">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="imagens/ico-candidaturas.png" class="img-fluid img-thumbnail"
                                alt=" ">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <a href="presidente.php">
                                    <h5 class="card-title">Candidaturas</h5>
                                </a>
                                <p class="card-text">Conheça alguns dos candidatos à Presidente e Senadores!</p>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="card card-home mb-3 ">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="imagens/ico-cidadania.png" class="img-fluid img-thumbnail rounded-start"
                                alt=" ">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <a href="cidadania.php">
                                    <h5 class="card-title">Cidadania</h5>
                                </a>
                                <p class="card-text">O significado de fazer parte de algo maior! Ética e ser cidadão</p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center justify-content-sm-center">
                <section class="card card-home mb-3 ">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="imagens/ico-linha-tempo.png" class="img-fluid img-thumbnail rounded-start"
                                alt=" ">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <a href="linha_do_tempo.php">
                                    <h5 class="card-title">Linha do Tempo</h5>
                                </a>
                                <p class="card-text">Linha do tempo de todos os presidentes da República do Brasil</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card card-home mb-3 ">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="imagens/ico-tripartite.png" class="img-fluid img-thumbnail rounded-start"
                                alt=" ">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <a href="tripartite.html">
                                    <h5 class="card-title">Tripartite</h5>
                                </a>
                                <p class="card-text">Clique para saber mais o que os três poderes politicos fazem</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>

    </div>
    <p class="text-center m-0 my-2"><a href="index.php" class="btn btn-dark">Voltar ao topo</a></p>

    <?php include_once('php/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>