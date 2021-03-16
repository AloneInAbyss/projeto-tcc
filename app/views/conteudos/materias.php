<?php 

require './public/scripts/banco.php';

$materias = $_POST['materia'] ;

switch ($materias){
    case "matematica":
    $titulo = "Matemática";
    break;

    case "biologia":
    $titulo = "Biologia";
    break;

    case "quimica":
    $titulo = "Química";
    break;

    case "fisica":
    $titulo = "Física";
    break;

    case "historia":
    $titulo = "História";
    break;

    case "portugues":
    $titulo = "Língua Portuguesa";
    break;

    case "literatura":
    $titulo = "Líteratura";
    break;

    case "geografia":
    $titulo = "Geografia";
    break;
}
 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS, ESTILOS PERSONALIZADOS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- CSS -->
        <!-- CSS GERAL -->
        <link rel="stylesheet" href="/public/css/style.css">
        <!-- CSS DESSA PÁGINA ESPECÍFICA -->
        <link rel="stylesheet" href="/public/css/pagina-materia.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Página Inicial</title>
    <link rel="icon" href="/public/images/site-logo.png">
    
    <!-- Modo Noturno -->
    <?php require_once './public/scripts/noturnoall.php'; ?>
</head>
<body onload="start();">
    <!-- NAVBAR -->
    <?php require_once './public/scripts/navbar.php'; ?>

    <!-- CONTEÚDO DA PÁGINA -->
    <main role="main">    
        <!-- CONTAINER -->
        <div class="container marketing">

            <!-- BREADCRUMB -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sumário</li>
                </ol>
            </nav>

            <!-- TÍTULO DA PÁGINA -->
            <h1 class="titulo"><?php echo $titulo; ?></h1>
            <hr class="page-header">

            <!-- ACCORDION -->
            <div id="accordion">
                <!-- CARD -->
                <?php 
                $result = mysqli_query($connection,"SELECT DISTINCT submateria FROM resumos WHERE materia='".$materias."'");
                $row = mysqli_num_rows($result);
                if($row > 0) {
                    while($linha = mysqli_fetch_array($result)){
                        $submateria = $linha['submateria'];
                  
                ?>
                <div class="card">
                    <!-- HEADER DO CARD -->
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            (<?php echo $submateria; ?>)
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <!-- BODY DO CARD -->
                        <div class="card-body">
                            <!-- LINHA -->
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center"><?php echo $submateria ?></h3>
                                </div>
                            </div>

                            <!-- LINHA -->
                            <?php  $result1 = mysqli_query($connection,"SELECT id,nome FROM resumos WHERE submateria='".$submateria."'");
                                   $row1 = mysqli_num_rows($result1);
                                   if($row1 > 0) {
                                   while($linha1 = mysqli_fetch_array($result1)){
                                   $nome = $linha1['nome'];
                                   $id = $linha1['id'];
                            ?>
                            <div class="row espaco-row">
                                <div class="col">
                                    <div class="list-group">    
                                        <form method="post" action="/conteudos">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input type="submit" value="<?php echo $nome; ?>" class="list-group-item list-group-item-action">
                                        </form>
                                    </div>
                                </div>
                            </div>
                                   <?php }
                                   }
                            ?>

                        </div>
                        <!-- /BODY DO CARD -->
                    </div>
                </div>
                <!-- /CARD -->
                <?php   }
                }
            ?>

            </div>
            <!-- /ACCORDION -->

            <hr class="linha-divisoria">
        </div>
        <!-- /CONTAINER -->

        <!-- RODAPÉ -->
        <?php require_once './public/scripts/rodape.php'; ?>
    </main>
    <!-- /CONTEÚDO DA PÁGINA -->

    <!-- BOOTSTRAP JQUERY, POPPER & JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>