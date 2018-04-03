<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Página Inicial</title>
    <link rel="icon" href="">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <!-- BOTÃO/ÍCONE DA NAVBAR -->
      <a class="navbar-brand" href="/">NOTA1000</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS DA NAVBAR -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">

          <!-- LINK 'PÁGINA INICIAL' -->
          <li class="nav-item active">
            <a class="nav-link" href="/">Página Inicial <span class="sr-only">(current)</span></a>
          </li>

          <!-- LINK 'SOBRE NÓS' -->
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nós</a>
          </li>

          <!-- DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matérias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/materia-matematica">Matemática</a>
              <a class="dropdown-item" href="/materia-fisica">Física</a>
              <a class="dropdown-item" href="/materia-quimica">Química</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/materia-biologia">Biologia</a>
              <a class="dropdown-item" href="/materia-geografia">Geografia</a>
              <a class="dropdown-item" href="/materia-historia">História</a>
            </div>
          </li>
        </ul>

        <!-- FORMULÁRIO 'PESQUISA' -->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Pesquisa">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>

      </div>
      <!-- /LINKS DA NAVBAR -->
    </nav>
    <!-- /NAVBAR -->

    <!-- CONTEÚDO DA PÁGINA -->
    <main role="main">    
        <!-- CONTAINER -->
        <div class="container marketing" style="padding-top: 50px;">
            
            <!-- TÍTULO DA PÁGINA -->
            <h1>Escolha Sua Matéria</h1>
            <hr class="page-header">

            <!-- SEÇÃO - LINKS PARA MATÉRIAS -->
            <div class="links-materias">
                <!-- LINHA -->
                <div class="row" style="padding-top: 15px;">
                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-matematica"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Matemática" width="140" height="140"></a>
                        <a href="/materia-matematica"><h2>Matemática</h2></a>
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-fisica"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Física" width="140" height="140"></a>
                        <a href="/materia-fisica"><h2>Física</h2></a>
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-quimica"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Química" width="140" height="140"></a>
                        <a href="/materia-quimica"><h2 style="padding-top: 5px;">Química</h2></a>
                    </div>
                </div>
                <!-- /LINHA -->

                <br><br>

                <!-- LINHA -->
                <div class="row">
                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-biologia"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Biologia" width="140" height="140"></a>
                        <a href="/materia-biologia"><h2>Biologia</h2></a>
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-geografia"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Geografia" width="140" height="140"></a>
                        <a href="/materia-geografia"><h2>Geografia</h2></a>
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                        <a href="/materia-historia"><img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="História" width="140" height="140"></a>
                        <a href="/materia-historia"><h2>História</h2></a>
                    </div>
                </div>
                <!-- /LINHA -->

            </div>
            <!-- /SEÇÃO - LINKS PARA MATÉRIAS -->

            <hr class="featurette-divider">
        </div>
        <!-- /CONTAINER -->

        <!-- RODAPÉ -->
        <footer class="container">
            <p class="float-right"><a href="#">Voltar para Cima</a></p>
            <p>&copy; 2018 Nota1000, 3º ETIM INFORMÁTICA &middot; <a href="#">Sobre Nós</a></p>
        </footer>
        <!-- /RODAPÉ -->
    </main>
    <!-- /CONTEÚDO DA PÁGINA -->

    <!-- BOOTSTRAP JQUERY, POPPER & JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>