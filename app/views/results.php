<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

    <!-- BOOTSTRAP CSS, ESTILOS PERSONALIZADOS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/resultado.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Página Inicial</title>
    <link rel="icon" href="/public/images/site-logo.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

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
            <p><?php
                $sql = mysqli_query($connection,"select * from resumos WHERE resumo LIKE '%".$buscar."%' OR nome LIKE '%".$buscar."%' OR 
                 materia LIKE '%".$buscar."%' OR submateria LIKE '%".$buscar."%' ");
                $row = mysqli_num_rows($sql);
                if($row > 0) {
                    while($linha = mysqli_fetch_array($sql)){
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $materia = $linha['materia'];
                        $submateria = $linha['submateria'];
                        $descricao = $linha['descricao'];
                        echo '<br>';
                        ?><form method="post" action="/conteudos">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <h6 style="color:blue"><input name="formResultado" type="submit" value="<?php echo $nome ?>"></h6>
                    </form>  <?php 
                        echo $materia;
                        echo '<br>';
                        echo $submateria;
                        echo '<br>';
                        echo $descricao;
                        echo '<br>';
                    }
                }
                else{
                    echo "Desculpe, nenhum resumo foi encontrado!";
                }

            ?></p>
            <!-- /SEÇÃO - LINKS PARA MATÉRIAS -->

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