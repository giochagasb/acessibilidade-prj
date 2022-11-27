<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
      <!-- SECTION DA 1ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">

        <!-- Card da República -->
        <button class="card align-items-center rounded-pill lh-1 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica1" aria-expanded="false"
          aria-controls="collapseRepublica1">
          <h2>Primeira República</h2>
          <p>República Velha</p>
          <p class="text-nowrap">15 de novembro de 1889 até 24 de outubro de 1930</p>
        </button>

        <!-- Card do Presidente -->
        <div class="card flex-row align-items-center mb-5 linha_tempo_card collapse" id="collapseRepublica1">
          <img src="imagens/presidentes/01_deodoro_da_fonseca_(1889).jpg" class="card-img-left linha_tempo_card_img"
            alt="Deodoro da Fonseca">
          <div class="card-body">
            <h3 class="card-title text-center">Deodoro da Fonseca</h3>
            <p class="card-text text-center">15 de novembro de 1889<br>até<br>23 de novembro de 1891</p>
          </div>
        </div>

        <!-- Card do Presidente -->
        <div class="card flex-row align-items-center mb-5 linha_tempo_card collapse" id="collapseRepublica1">
          <img src="imagens/presidentes/02_floriano_peixoto_(1891).jpg" class="card-img-left linha_tempo_card_img"
            alt="Floriano Peixoto">
          <div class="card-body">
            <h3 class="card-title text-center">Floriano Peixoto</h3>
            <p class="card-text text-center">23 de novembro de 1891<br>até<br>15 de novembro de 1894</p>
          </div>
        </div>
      </section>



      <!-- SECTION DA 2ª REPÚBLICA -->
      <section class="container-fluid row justify-content-center mx-auto linha_tempo_section">

        <!-- Card da República -->
        <button class="card align-items-center rounded-pill lh-1 py-3 mb-5 linha_tempo_card" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseRepublica2" aria-expanded="false"
          aria-controls="collapseRepublica2">
          <h2>Segunda República</h2>
          <p>República Velha</p>
          <p class="text-nowrap">15 de novembro de 1889 até 24 de outubro de 1930</p>
        </button>

        <!-- Card do Presidente -->
        <div class="card flex-row align-items-center mb-5 linha_tempo_card collapse" id="collapseRepublica2">
          <img src="imagens/presidentes/01_deodoro_da_fonseca_(1889).jpg" class="card-img-left linha_tempo_card_img"
            alt="Deodoro da Fonseca">
          <div class="card-body">
            <h3 class="card-title text-center">Deodoro da Fonseca</h3>
            <p class="card-text text-center">15 de novembro de 1889<br>até<br>23 de novembro de 1891</p>
          </div>
        </div>

        <!-- Card do Presidente -->
        <div class="card flex-row align-items-center mb-5 linha_tempo_card collapse" id="collapseRepublica2">
          <img src="imagens/presidentes/02_floriano_peixoto_(1891).jpg" class="card-img-left linha_tempo_card_img"
            alt="Floriano Peixoto">
          <div class="card-body">
            <h3 class="card-title text-center">Floriano Peixoto</h3>
            <p class="card-text text-center">23 de novembro de 1891<br>até<br>15 de novembro de 1894</p>
          </div>
        </div>
      </section>
    </article>
  </main>

  <?php include_once('php/footer.php'); ?>

</body>

</html>