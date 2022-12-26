<?php
  include_once('config/connection.php');
  $stmt = $conectar->prepare("SELECT * FROM posts");
  $stmt->execute();
  $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Template para o carousel Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        div.c-wrapper{
            width: 80%;
            margin: auto;
        }

        img{
        width: 100%;
        margin: auto;
        }
    </style>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #E2F006;">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.discordapp.com/attachments/340289058628567042/1056681711682981928/imagem_2022-12-25_181221496_Easy-Resize.com__1_-removebg-preview.png" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">XIS BURGUER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TÁBUAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SOBREMESAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/index.php">Painel ADM</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>
    </header><br><br>

    <main role="main">

        <h1>O que pode ser encontrado na lanchonete do Gio</h1>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-50" src="https://www.euamomundoanimal.com.br/uploads/jw2zyueqhod9rm7v49uu.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="https://www.euamomundoanimal.com.br/uploads/hjcve0h3m06wzi4qgeet.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="https://www.euamomundoanimal.com.br/uploads/gqdcqm2yg06cpkosntab.jpg" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

      <div class="container marketing">
        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">XIS BURGUER <span class="text-muted"> Supreendente, não?!</span></h2>
            <p class="lead">Mate a sua fome de leão escolhendo entre 10 sabores incríveis (ou o Kids para os pequenos desbravadores). Se preferir, também adicione milho e ervilha ao seu xis!</p>
          </div>
          <div class="col-md-5">
            <img src="https://www.euamomundoanimal.com.br/uploads/jw2zyueqhod9rm7v49uu.jpg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">TÁBUAS<span class="text-muted"> Tá legal ou não tá?</span></h2>
            <p class="lead">São cinco deliciosos sabores pra você escolher e dividir com até 4 pessoas!</p>
          </div>
          <div class="col-md-5 order-md-1">
          <img src="https://www.euamomundoanimal.com.br/uploads/hjcve0h3m06wzi4qgeet.jpg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">SOBREMESAS<span class="text-muted"> Xeque-mate!</span></h2>
            <p class="lead">Aventure-se também com as nossas delícias geladas, para fechar o seu passeio na selva com chave de ouro!</p>
          </div>
          <div class="col-md-5">
          <img src="https://www.euamomundoanimal.com.br/uploads/gqdcqm2yg06cpkosntab.jpg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->

        <h2>Nossas postagens:</h2>
      <table class="table">
        <tbody>
          <?php foreach($results as $post): ?>
            <tr id="myUL">
              <td scope="row"><?= $post["title"] ?></td>
              <td scope="row"><?= $post["description"] ?></td>
              <td class="actions">
              <!-- </a>
              <a href="editar.php?title=<?= $post["title"] ?>">
              <i class="fas fa-eye check-icon">Editar</i>
              </a>
              <a href="delete.php?title=<?= $post["title"] ?>">Apagar</a> -->
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; Lanchonete do Gio, 2022 &middot;</p>
      </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
      function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    </script>
</html>
