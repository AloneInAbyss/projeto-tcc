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

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>Inserção de Questões</title>
    <link rel="icon" href="/public/images/site-logo.png">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <h1 style="border-bottom: 1px solid #f1f1f1">
                    <span class="small">Olá</span> <?php echo $_SESSION['user']; ?>
                    <span class="float-right">
                        <a style="text-decoration: none; font-size: 0.7em; color: #a1a1a1;" href="/login">
                            Voltar
                        </a>
                    </span>
                </h1>
                <br><br>
                <div class="row">
                    <div class="offset-1 col-10">
                        <form class="form-signin" method="post" action="/inserir-questoes">
                            <h1 class="h3 mb-3 font-weight-normal text-center">INSERÇÃO DE QUESTÕES</h1>

                            <label for="inputResposta">Resposta</label>
                            <input type="text" id="inputResposta" class="form-control" placeholder="Resposta da questão" name="resposta" maxlength="255" required>
                            <br>

                            <label for="inputQuestao">Questão</label>
                            <input type="text" id="inputQuestao" class="form-control" placeholder="Digite a questão" name="questao" maxlength="524288" required>
                            <br>

                            <label for="inputAlternativa1">Alternativa 1</label>
                            <input type="text" id="inputAlternativa1" class="form-control" placeholder="Primeira alternativa" name="alternativa1" maxlength="255" required>
                            <br>

                            <label for="inputAlternativa2">Alternativa 2</label>
                            <input type="text" id="inputAlternativa2" class="form-control" placeholder="Segunda alternativa" name="alternativa2" maxlength="255" required>
                            <br>

                            <label for="inputAlternativa3">Alternativa 3</label>
                            <input type="text" id="inputAlternativa3" class="form-control" placeholder="Terceira alternativa" name="alternativa3" maxlength="255" required>
                            <br>

                            <label for="inputAlternativa4">Alternativa 4</label>
                            <input type="text" id="inputAlternativa4" class="form-control" placeholder="Quarta alternativa" name="alternativa4" maxlength="255" required>
                            <br>

                            <label for="inputAlternativa5">Alternativa 5</label>
                            <input type="text" id="inputAlternativa5" class="form-control" placeholder="Quinta alternativa" name="alternativa5" maxlength="255" required>
                            <br>

                            <label for="inputMateria">Matéria </label>
                            <input type="text" id="inputMateria" class="form-control" placeholder="Ex: Química" name="materia" maxlength="255" required>
                            <br>

                            <label for="inputImagem">Imagem</label>
                            <input type="text" id="inputImagem" class="form-control" placeholder="Local da imagem" name="imagem" maxlength="255">
                            <br>

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="formCadastrarQuestoes">Inserir</button>
                        </form>

                        <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>