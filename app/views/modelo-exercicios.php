<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS, ESTILOS PERSONALIZADOS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- CSS -->
        <!-- CSS GERAL -->
        <link rel="stylesheet" href="/public/css/style.css">
        <!-- CSS DESSA PÁGINA ESPECÍFICA -->
        <link rel="stylesheet" href="/public/css/pagina-exercicios.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Página Inicial</title>
    <link rel="icon" href="/public/images/site-logo.png">

    <script>

        function show(x, y) {
            document.getElementById("confirm"+x).style.display="block";
            alternativa = x + y;
        }

        function resultado(x, y) {
            document.getElementById("result"+x).style.display="block";
            resposta = x+y;

            if (alternativa==resposta){
                document.getElementById(resposta).style.backgroundColor = "green";
            } else {
                document.getElementById(resposta).style.backgroundColor = "green";
                document.getElementById(alternativa).style.backgroundColor = "red";
            }
        }
        
    </script>
    
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
                    <li class="breadcrumb-item"><a href="#">(<?php echo $_POST['materia']?>)</a></li>
                    <li class="breadcrumb-item"><a href="#">(<?php echo $_POST['submateria']?>)</a></li>
                    <li class="breadcrumb-item active" aria-current="page">(Exercicios <?php echo $_POST['nome']?>)</li>
                </ol>
            </nav>
            

            <!-- TÍTULO DA PÁGINA -->
            <h1 class="titulo">(Exercicios <?php echo $_POST['nome']?>)</h1>
            <h3 class="text-muted">(<?php echo $_POST['submateria']?>)</h3>
            <hr class="page-header">

            

            <?php
                require './public/scripts/banco.php';
                

                $result = mysqli_query($connection,"select * from questao where materia='".$_POST['nome']."'");
                $row = mysqli_num_rows($result);
                if($row > 0) {
                    while($linha = mysqli_fetch_array($result)){
                        $id = $linha['id'];
                        $resposta = $linha['resposta'];
                        $questao = $linha['questao'];
                        $alternativa1 = $linha['alternativa1'];
                        $alternativa2 = $linha['alternativa2'];
                        $alternativa3 = $linha['alternativa3'];
                        $alternativa4 = $linha['alternativa4'];
                        $alternativa5 = $linha['alternativa5'];
                        $resolucao = $linha['resolucao'];
                        $imagem = $linha['imagem'];
                    
                        ?>
                        <p><?php echo $id.") ".$questao ?></p>
                        <br>
                        <?php if ($imagem<>""){ ?>
                        <center><img src="/public/images/<?php echo $imagem; ?>" alt="<?php echo $imagem; ?>"></center>    
                        <?php } ?>
                        <br>
                        <input id=<?php echo '"'.$id.$alternativa1.'"'; ?> type="radio" class="option-input radio" name="gender" value="questao" onclick="<?php echo "show(".$id.",'".$alternativa1."')"; ?>"><?php echo $alternativa1 ; ?><br>
                        <input id=<?php echo '"'.$id.$alternativa2.'"'; ?> type="radio" class="option-input radio" name="gender" value="questao" onclick="<?php echo "show(".$id.",'".$alternativa2."')"; ?>"><?php echo $alternativa2 ; ?><br>
                        <input id=<?php echo '"'.$id.$alternativa3.'"'; ?> type="radio" class="option-input radio" name="gender" value="questao" onclick="<?php echo "show(".$id.",'".$alternativa3."')"; ?>"><?php echo $alternativa3 ; ?><br>
                        <input id=<?php echo '"'.$id.$alternativa4.'"'; ?> type="radio" class="option-input radio" name="gender" value="questao" onclick="<?php echo "show(".$id.",'".$alternativa4."')"; ?>"><?php echo $alternativa4 ; ?><br>
                        <input id=<?php echo '"'.$id.$alternativa5.'"'; ?> type="radio" class="option-input radio" name="gender" value="questao" onclick="<?php echo "show(".$id.",'".$alternativa5."')"; ?>"><?php echo $alternativa5 ; ?><br>
                        
                        <br><br>
                        <button id=<?php echo '"confirm'.$id.'"'; ?> type="button" class="btn btn-outline-danger button-float" style="display:none" onclick="<?php echo "resultado(".$id.",'".$resposta."')"; ?>">Confirmar</button>
                        <button id=<?php echo '"result'.$id.'"'; ?> type="button" class="btn btn-outline-danger button-float" style="display:none">Resolução</button>
                        <br>
                        
                        <?php
                    }
                }
            ?>

            

            <hr class="linha-dividoria">

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