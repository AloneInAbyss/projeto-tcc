<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Modelo da Página de Matérias</title>
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
          <li class="nav-item">
            <a class="nav-link" href="/">Página Inicial</a>
          </li>

          <!-- LINK 'SOBRE NÓS' -->
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nós</a>
          </li>

          <!-- DROPDOWN -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matérias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item active" href="#">(Matéria Atual) <span class="sr-only">(current)</span></a>
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

            <!-- BREADCRUMP -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item"><a href="#">(Matéria)</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sumário</li>
                </ol>
            </nav>
            

            <!-- TÍTULO DA PÁGINA -->
            <h1>(Nome da Matéria)</h1>
            <hr class="page-header" style="padding-bottom: 15px">

            <!-- ACCORDION -->
            <div id="accordion">
                <!-- CARD -->
                <div class="card">
                    <!-- HEADER DO CARD -->
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            (Tema 1)
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <!-- BODY DO CARD -->
                        <div class="card-body">
                            <!-- LINHA -->
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center">Nome do Tema</h3>
                                </div>
                            </div>

                            <!-- LINHA -->
                            <div class="row" style="padding-top:20px">
                                <div class="col">
                                    <div class="list-group">    
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="list-group">  
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>   
                            </div>

                        </div>
                        <!-- /BODY DO CARD -->
                    </div>
                </div>
                <!-- /CARD -->

                <!-- CARD -->
                <div class="card">
                    <!-- HEADER DO CARD -->
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            (Tema 2)
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <!-- BODY DO CARD -->
                        <div class="card-body">
                            <!-- LINHA -->
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center">Nome do Tema</h3>
                                </div>
                            </div>

                            <!-- LINHA -->
                            <div class="row" style="padding-top:20px">
                                <div class="col">
                                    <p class="lead text-center">Subtema 2</p>
                                    <div class="list-group">  
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>
                                <div class="col">
                                    <p class="lead text-center">Subtema 2</p>
                                    <div class="list-group">  
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- /BODY DO CARD -->
                    </div>
                </div>
                <!-- /CARD -->
                
                <!-- CARD -->
                <div class="card">
                    <!-- HEADER DO CARD -->
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            (Tema 3)
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <!-- BODY DO CARD -->
                        <div class="card-body">
                            <!-- LINHA -->
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center">Nome do Tema</h3>
                                </div>
                            </div>

                            <!-- LINHA -->
                            <div class="row" style="padding-top:20px">
                                <div class="col">
                                    <p class="lead text-center">Subtema 1</p>
                                    <div class="list-group">  
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>
                                <div class="col">
                                    <p class="lead text-center">Subtema 2</p>
                                    <div class="list-group">  
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                        <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>
                            </div>
                            
                            <!-- LINHA -->
                            <div class="row" style="padding-top:20px">
                                <div class="col">
                                    <p class="lead text-center">Subtema 3</p>
                                    <div class="list-group">  
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                </div> 
                                </div>
                                <div class="col">
                                    <p class="lead text-center">Subtema 4</p>
                                    <div class="list-group">  
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 1</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 2</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 3</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 4</a>
                                    <a href="#" class="list-group-item list-group-item-action">Matéria 5</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- /BODY DO CARD -->
                    </div>
                </div>
                <!-- /CARD -->
            </div>
            <!-- /ACCORDION -->

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