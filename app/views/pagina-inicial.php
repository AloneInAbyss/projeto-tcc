<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS, ESTILOS PERSONALIZADOS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    
    <!-- CSS -->
        <!-- CSS GERAL -->
        <link rel="stylesheet" href="/public/css/style.css">
        <!-- CSS DESSA PÁGINA ESPECÍFICA -->
        <link rel="stylesheet" href="/public/css/pagina-inicial.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>NOTA 1000 - Página Inicial</title>
    <link rel="icon" href="/public/images/site-logo.png">

    <!-- Modo Noturno -->
    <?php require_once './public/scripts/noturno.php'; ?>
   
</head>
<body onload="start();" > 
<div class="cor1">
    <!-- NAVBAR -->
    <?php require_once './public/scripts/navbar.php'; ?>

    <!-- CONTEÚDO DA PÁGINA -->
    <main role="main">    
        <!-- CONTAINER -->
        <div class="container">
            
            <!-- TÍTULO DA PÁGINA -->
            <h1 class="titulo-principal">ESCOLHA SUA MATÉRIA</h1>
            <hr> 

            <!-- SEÇÃO - LINKS PARA MATÉRIAS -->
            <div class="link links-materias">
                <!-- LINHA -->
                <div class="row">
                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="matematica">
                        <input type="image" id="matematica" src="/public/images/matematica.png" border="0" class="rounded-circle logos" alt="Matemática" value="matematica"/>
                        <h2><input name="formMateria" type="submit" value="Matemática"></h2>
                    </form>   
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="fisica">
                        <input type="image" id="fisica" src="/public/images/fisica.png" border="0" class="rounded-circle logos" alt="Física" value="fisica"/>
                        <h2><input name="formMateria" type="submit" value="Física"></h2>
                    </form>   
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="quimica">
                        <input type="image" id="quimica" src="/public/images/quimica.png" border="0" class="rounded-circle logos" alt="Química" value="quimica"/>
                        <h2><input name="formMateria" type="submit" value="Química"></h2>
                    </form>   
                    </div>
                </div>
                <!-- /LINHA -->

                <br><br>

                <!-- LINHA -->
                <div class="row">
                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="biologia">
                        <input type="image" id="biologia" src="/public/images/biologia.png" border="0" class="rounded-circle logos" alt="Biologia" value="biologia"/>
                        <h2><input name="formMateria" type="submit" value="Biologia"></h2>
                    </form>   
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="geografia">
                        <input type="image" id="geografia" src="/public/images/geografia.png" border="0" class="rounded-circle logos" alt="Geografia" value="geografia"/>
                        <h2><input name="formMateria" type="submit" value="Geografia"></h2>
                    </form>   
                    </div>

                    <!-- COLUNA -->
                    <div class="col-lg-4">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="literatura">
                        <input type="image" id="literatura" src="/public/images/literatura.png" border="0" class="rounded-circle logos" alt="Literatura" value="literatura"/>
                        <h2><input name="formMateria" type="submit" value="Literatura"></h2>
                    </form>   
                    </div>
                </div>
                <!-- /LINHA -->

                <br><br>

                <!-- LINHA -->
                <div class="row">
                    <!-- COLUNA -->
                    <div class="col-lg-6">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="historia">
                        <input type="image" id="historia" src="/public/images/historia.png" border="0" class="rounded-circle logos" alt="História" value="historia"/>
                        <h2><input name="formMateria" type="submit" value="História"></h2>
                    </form>   
                    </div>
                    <!-- COLUNA -->
                    <div class="col-lg-6">
                    <form method="post" action="/materias">
                        <input type="hidden" name="materia" value="portugues">
                        <input type="image" id="portugues" src="/public/images/portugues.png" border="0" class="rounded-circle logos" alt="Português" value="portugues"/>
                        <h2><input name="formMateria" type="submit" value="Língua Portuguesa"></h2>
                    </form>   
                    </div>
                </div>

            </div>
            <!-- /SEÇÃO - LINKS PARA MATÉRIAS -->

            <hr class="linha-divisoria">
        </div>
        <!-- /CONTAINER -->

        <!-- RODAPÉ -->
        <?php require_once './public/scripts/rodape.php'; ?>
        
    </main>
    <!-- /CONTEÚDO DA PÁGINA -->
</div>
    <!-- BOOTSTRAP JQUERY, POPPER & JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>