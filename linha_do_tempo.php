<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="imagens/icon-menu48x48.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>


  <title>Linha do Tempo dos Presidentes</title>
</head>



<body id="linha_tempo">

  <?php include_once('php/header.php'); ?>

  <main>
    <article class="my-5">
      <h1 class="row justify-content-center m-3 mb-5">Linha do Tempo dos Presidentes</h1>

      <!-- SECTION DA 1ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">1ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica1" aria-expanded="false"
          aria-controls="collapseRepublica1">
          <span class="fs-1 fw-semibold">Primeira República</span>
          <span class="fs-5">República Velha</span>
          <span>15 de novembro de 1889 até 24 de outubro de 1930</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica1">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/01_deodoro_da_fonseca_(1889).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Deodoro da Fonseca">
            <div class="card-body">
              <h3 class="card-title text-center">Deodoro da Fonseca</h3>
              <p class="card-text text-center">15 de novembro de 1889<br>até<br>23 de novembro de 1891</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/02_floriano_peixoto_(1891).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Floriano Peixoto">
            <div class="card-body">
              <h3 class="card-title text-center">Floriano Peixoto</h3>
              <p class="card-text text-center">23 de novembro de 1891<br>até<br>15 de novembro de 1894</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/03_prudente_de_morais.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Prudente de Morais">
            <div class="card-body">
              <h3 class="card-title text-center">Prudente de Morais</h3>
              <p class="card-text text-center">15 de novembro de 1894<br>até<br>15 de novembro de 1898</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/04_campos_sales.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Campos Sales">
            <div class="card-body">
              <h3 class="card-title text-center">Campos Sales</h3>
              <p class="card-text text-center">15 de novembro de 1898<br>até<br>15 de novembro de 1902</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/05_rodrigues_alves.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Rodrigues Alves">
            <div class="card-body">
              <h3 class="card-title text-center">Rodrigues Alves</h3>
              <p class="card-text text-center">15 de novembro de 1902<br>até<br>15 de novembro de 1906</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/06_afonso_pena.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Afonso Pena">
            <div class="card-body">
              <h3 class="card-title text-center">Afonso Pena</h3>
              <p class="card-text text-center">15 de novembro de 1906<br>até<br>14 de junho de 1909</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/07_nilo_pecanha.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Nilo Peçanha">
            <div class="card-body">
              <h3 class="card-title text-center">Nilo Peçanha</h3>
              <p class="card-text text-center">14 de junho de 1909<br>até<br>15 de novembro de 1910</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/08_hermes_da_fonseca_(1910).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Hermes da Fonseca">
            <div class="card-body">
              <h3 class="card-title text-center">Hermes da Fonseca</h3>
              <p class="card-text text-center">15 de novembro de 1910<br>até<br>15 de novembro de 1914</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/09_venceslau_bras.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Venceslau Brás">
            <div class="card-body">
              <h3 class="card-title text-center">Venceslau Brás</h3>
              <p class="card-text text-center">15 de novembro de 1914<br>até<br>15 de novembro de 1918</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/09.1_rodrigues_alves.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Rodrigues Alves">
            <div class="card-body">
              <h3 class="card-title text-center">Rodrigues Alves</h3>
              <p class="card-text text-center">Morreu antes de tomar posse</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/10_delfim_moreira_(1918).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Delfim Moreira">
            <div class="card-body">
              <h3 class="card-title text-center">Delfim Moreira</h3>
              <p class="card-text text-center">15 de novembro de 1918<br>até<br>28 de julho de 1919</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/11_epitacio_pessoa_(1919).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Epitácio Pessoa">
            <div class="card-body">
              <h3 class="card-title text-center">Epitácio Pessoa</h3>
              <p class="card-text text-center">28 de julho de 1919<br>até<br>15 de novembro de 1922</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/12_artur_bernardes_(1922).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Artur Bernardes">
            <div class="card-body">
              <h3 class="card-title text-center">Artur Bernardes</h3>
              <p class="card-text text-center">15 de novembro de 1922<br>até<br>15 de novembro de 1926</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/13_washington_luis.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Washington Luís">
            <div class="card-body">
              <h3 class="card-title text-center">Washington Luís</h3>
              <p class="card-text text-center">15 de novembro de 1926<br>até<br>24 de outubro de 1930</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/13.1_julio_prestes_(1930).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Júlio Prestes">
            <div class="card-body">
              <h3 class="card-title text-center">Júlio Prestes</h3>
              <p class="card-text text-center">Eleito, não assumiu em razão da Revolução de 1930</p>
            </div>
          </div>



          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica1" aria-expanded="false"
            aria-controls="collapseRepublica1">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <!-- SECTION DA 2ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">2ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica2" aria-expanded="false"
          aria-controls="collapseRepublica2">
          <span class="fs-1 fw-semibold">Segunda República</span>
          <span class="fs-5">Governos Provisório e Constitucional</span>
          <span>24 de outubro de 1930 até 10 de novembro 1937</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica2">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/13.2_junta_governativa_de_1930.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem da Junta Governativa Provisória de 1930">
            <div class="card-body">
              <h3 class="card-title text-center">Junta Governativa Provisória de 1930</h3>
              <p class="card-text text-center">24 de outubro de 1930<br>até<br>3 de novembro de 1930</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/14_getulio_dorneles_vargas_(1930).jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Getúlio Vargas">
            <div class="card-body">
              <h3 class="card-title text-center">Getúlio Vargas</h3>
              <p class="card-text text-center">3 de novembro de 1930<br>até<br>10 de novembro de 1937</p>
            </div>
          </div>


          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica2" aria-expanded="false"
            aria-controls="collapseRepublica2">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <!-- SECTION DA 3ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">3ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica3" aria-expanded="false"
          aria-controls="collapseRepublica3">
          <span class="fs-1 fw-semibold">Terceira República</span>
          <span class="fs-5">Estado Novo</span>
          <span>10 de novembro 1937 até 31 de janeiro de 1946</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica3">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/14_getulio_dorneles_vargas_(1930).jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Getúlio Vargas">
            <div class="card-body">
              <h3 class="card-title text-center">Getúlio Vargas</h3>
              <p class="card-text text-center">10 de novembro de 1937<br>até<br>29 de outubro de 1945</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/15_jose_linhares.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de José Linhares">
            <div class="card-body">
              <h3 class="card-title text-center">José Linhares</h3>
              <p class="card-text text-center">29 de outubro de 1945<br>até<br>31 de janeiro de 1946</p>
            </div>
          </div>


          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica3" aria-expanded="false"
            aria-controls="collapseRepublica3">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <!-- SECTION DA 4ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">4ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica4" aria-expanded="false"
          aria-controls="collapseRepublica4">
          <span class="fs-1 fw-semibold">Quarta República</span>
          <span class="fs-5">República Populista</span>
          <span>31 de janeiro de 1946 até 2 de abril de 1964</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica4">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/16_eurico_gaspar_dutra.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Eurico Gaspar Dutra">
            <div class="card-body">
              <h3 class="card-title text-center">Eurico Gaspar Dutra</h3>
              <p class="card-text text-center">31 de janeiro de 1946<br>até<br>31 de janeiro de 1951</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/17_getulio_dorneles_vargas_(1951).jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Getúlio Vargas">
            <div class="card-body">
              <h3 class="card-title text-center">Getúlio Vargas</h3>
              <p class="card-text text-center">31 de janeiro de 1951<br>até<br>24 de agosto de 1954</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/18_cafe_filho.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Café Filho">
            <div class="card-body">
              <h3 class="card-title text-center">Café Filho</h3>
              <p class="card-text text-center">24 de agosto de 1954<br>até<br>8 de novembro de 1955</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/19_carlos_luz.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Carlos Luz">
            <div class="card-body">
              <h3 class="card-title text-center">Carlos Luz</h3>
              <p class="card-text text-center">8 de novembro de 1955<br>até<br>11 de novembro de 1955</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/20_nereu_ramos.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Nereu Ramos">
            <div class="card-body">
              <h3 class="card-title text-center">Nereu Ramos</h3>
              <p class="card-text text-center">11 de novembro de 1955<br>até<br>31 de janeiro de 1956</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/21_juscelino_kubitschek.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Juscelino Kubitschek">
            <div class="card-body">
              <h3 class="card-title text-center">Juscelino Kubitschek</h3>
              <p class="card-text text-center">31 de janeiro de 1956<br>até<br>31 de janeiro de 1961</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/22_janio_quadros.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Jânio Quadros">
            <div class="card-body">
              <h3 class="card-title text-center">Jânio Quadros</h3>
              <p class="card-text text-center">31 de janeiro de 1961<br>até<br>25 de agosto de 1961</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/23_ranieri_mazzilli_(1961).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Ranieri Mazzilli">
            <div class="card-body">
              <h3 class="card-title text-center">Ranieri Mazzilli</h3>
              <p class="card-text text-center">25 de agosto de 1961<br>até<br>7 de setembro de 1961</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/24_joao_goulart.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de João Goulart">
            <div class="card-body">
              <h3 class="card-title text-center">João Goulart</h3>
              <p class="card-text text-center">7 de setembro de 1961<br>até<br>2 de abril de 1964</p>
            </div>
          </div>


          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica4" aria-expanded="false"
            aria-controls="collapseRepublica4">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <!-- SECTION DA 5ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">5ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica5" aria-expanded="false"
          aria-controls="collapseRepublica5">
          <span class="fs-1 fw-semibold">Quinta República</span>
          <span class="fs-5">Ditadura Militar</span>
          <span>2 de abril de 1964 até 15 de março de 1985</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica5">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/25_ranieri_mazzilli_(1964).jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Ranieri Mazzilli">
            <div class="card-body">
              <h3 class="card-title text-center">Ranieri Mazzilli</h3>
              <p class="card-text text-center">2 de abril de 1964<br>até<br>15 de abril de 1964</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/26_humberto_castelo_branco.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Humberto Castelo Branco">
            <div class="card-body">
              <h3 class="card-title text-center">Humberto Castelo Branco</h3>
              <p class="card-text text-center">15 de abril de 1964<br>até<br>15 de março de 1967</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/27_artur_da_costa_e_silva.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Artur da Costa e Silva">
            <div class="card-body">
              <h3 class="card-title text-center">Artur da Costa e Silva</h3>
              <p class="card-text text-center">15 de março de 1967<br>até<br>31 de agosto de 1969</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/27.1_pedro_aleixo.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Pedro Aleixo">
            <div class="card-body">
              <h3 class="card-title text-center">Pedro Aleixo</h3>
              <p class="card-text text-center px-3">Vice-presidente impedido de tomar posse como Presidente pela junta
                militar
                de 1969</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/27.2_junta_militar_brasileira_de_1969.jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem da Junta militar de 1969">
            <div class="card-body">
              <h3 class="card-title text-center">Junta militar de 1969</h3>
              <p class="card-text text-center">31 de agosto de 1969<br>até<br>30 de outubro de 1969</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/28_emilio_garrastazu_medici.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Emílio Garrastazu Médici">
            <div class="card-body">
              <h3 class="card-title text-center">Emílio Garrastazu Médici</h3>
              <p class="card-text text-center">30 de outubro de 1969<br>até<br>15 de março de 1974</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/29_ernesto_geisel.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Ernesto Geisel">
            <div class="card-body">
              <h3 class="card-title text-center">Ernesto Geisel</h3>
              <p class="card-text text-center">15 de março de 1974<br>até<br>15 de março de 1979</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/30_joao_figueiredo.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de João Figueiredo">
            <div class="card-body">
              <h3 class="card-title text-center">João Figueiredo</h3>
              <p class="card-text text-center">15 de março de 1979<br>até<br>15 de março de 1985</p>
            </div>
          </div>


          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica5" aria-expanded="false"
            aria-controls="collapseRepublica5">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <!-- SECTION DA 6ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">
        <h2 class="d-none">6ª REPÚBLICA</h2>

        <!-- Card da República -->
        <button class="card align-items-center rounded text-light bg-dark bg-gradient lh-3 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica6" aria-expanded="false"
          aria-controls="collapseRepublica6">
          <span class="fs-1 fw-semibold">Sexta República</span>
          <span class="fs-5">Nova República</span>
          <span>15 de março de 1985 à atualidade</span>
        </button>

        <div class="container-fluid row justify-content-center mb-5 mx-auto collapse" id="collapseRepublica6">

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/30.1_tancredo_neves.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Tancredo Neves">
            <div class="card-body">
              <h3 class="card-title text-center">Tancredo Neves</h3>
              <p class="card-text text-center">Morreu antes de tomar posse</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/31_jose_sarney.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de José Sarney">
            <div class="card-body">
              <h3 class="card-title text-center">José Sarney</h3>
              <p class="card-text text-center">15 de março de 1985<br>até<br>15 de março de 1990</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/32_fernando_affonso_collor_de_mello_(1992).jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Fernando Collor">
            <div class="card-body">
              <h3 class="card-title text-center">Fernando Collor</h3>
              <p class="card-text text-center">15 de março de 1990<br>até<br>29 de dezembro de 1992</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/33_itamar_augusto_cautiero_franco.jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Itamar Franco">
            <div class="card-body">
              <h3 class="card-title text-center">Itamar Franco</h3>
              <p class="card-text text-center">29 de dezembro de 1992<br>até<br>1º de janeiro de 1995</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/34_fernando_henrique_cardoso_(1999).jpg"
              class="card-img-left linha_tempo_card_img" alt="Imagem de Fernando Henrique Cardoso">
            <div class="card-body">
              <h3 class="card-title text-center">Fernando Henrique Cardoso</h3>
              <p class="card-text text-center">1º de janeiro de 1995<br>até<br>1º de janeiro de 2003</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/35_luiz_inacio_lula_da_silva.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Luiz Inácio Lula da Silva">
            <div class="card-body">
              <h3 class="card-title text-center">Luiz Inácio Lula da Silva</h3>
              <p class="card-text text-center">1º de janeiro de 2003<br>até<br>1º de janeiro de 2011</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/36_dilma_rousseff.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Dilma Rousseff">
            <div class="card-body">
              <h3 class="card-title text-center">Dilma Rousseff</h3>
              <p class="card-text text-center">1° de janeiro de 2011<br>até<br>31 de agosto de 2016</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/37_michel_temer.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Michel Temer">
            <div class="card-body">
              <h3 class="card-title text-center">Michel Temer</h3>
              <p class="card-text text-center">31 de agosto de 2016<br>até<br>1º de janeiro de 2019</p>
            </div>
          </div>

          <!-- Card do Presidente -->
          <div class="card flex-row align-items-center mb-5 linha_tempo_card">
            <img src="imagens/presidentes/38_jair_messias_bolsonaro.jpg" class="card-img-left linha_tempo_card_img"
              alt="Imagem de Jair Bolsonaro">
            <div class="card-body">
              <h3 class="card-title text-center">Jair Bolsonaro</h3>
              <p class="card-text text-center">1º de janeiro de 2019<br>até<br>o presente momento</p>
            </div>
          </div>


          <button class="card align-items-center rounded-pill text-light bg-dark bg-gradient py-3 mb-5 linha_tempo_card" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseRepublica6" aria-expanded="false"
            aria-controls="collapseRepublica6">
            <span>Clique aqui para fechar essa República</span>
          </button>

        </div>

      </section>





      <p class="referencias-footer text-center m-0">
            <small class="paleta-preto-color ">Acesse também: <a class="paleta-preto-color fw-bold" href="referencias.php#LinhaTempoGaleria" target="_blank">Referências dessa página</a></small>
        </p>
        
    </article>
  </main>

  <?php include_once('php/footer.php'); ?>

</body>

</html>