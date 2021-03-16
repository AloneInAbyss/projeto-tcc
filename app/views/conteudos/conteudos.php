<?php
    require './public/scripts/banco.php';

    $id = $_POST['id'];

    $result1 = mysqli_query($connection,"SELECT * FROM resumos WHERE id='".$id."'");
    $row1 = mysqli_num_rows($result1);
    if($row1 > 0) {
    while($linha1 = mysqli_fetch_array($result1)){
    $nome = $linha1['nome'];
    $materia = $linha1['materia'];
    $submateria = $linha1['submateria'];
    $resumo = $linha1['resumo'];
    }
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
        <link rel="stylesheet" href="/public/css/pagina-conteudo-materia.css">

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

            <!-- BREADCRUMP -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item"><a href="#">(<?php echo $materia ?>)</a></li>
                    <li class="breadcrumb-item active" aria-current="page">(<?php echo $submateria ?>)</li>
                </ol>
            </nav>

            <!-- TÍTULO DA PÁGINA -->
            <h1 class="titulo">(<?php echo $nome ?>)</h1>
            <h3 class="text-muted">(<?php echo $submateria ?>)</h3>
            <hr class="page-header">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <?php echo $resumo; ?>
                    </div>
                </div>


            <!-- CAIXA FLUTUANTE -->
            <div class="float div-ocultar">
                <p class="my-float">Quer testar seu conhecimento?</p>
                <br>
                <form class="form-inline my-2 my-lg-0" method="post" action="/exercicios">
                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <input type="hidden" name="materia" value="<?php echo $materia; ?>">
                <input type="hidden" name="submateria" value="<?php echo $submateria; ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="ir">Pesquisar</button>
        </form>
            </div>
            

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