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
    <title>Inserção de Resumos</title>
    <link rel="icon" href="/public/images/site-logo.png">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-sm-3 col-sm-6">
                <h1 style="border-bottom: 1px solid #f1f1f1">
                    <span class="small">Olá</span> <?php echo $_SESSION['user']; ?>
                    <span class="float-right">
                        <a style="text-decoration: none; font-size: 0.7em; color: #a1a1a1;" href="/administracao">
                            Voltar
                        </a>
                    </span>
                </h1>
                <br><br>
                <div class="row">
                    <div class="offset-1 col-10">
                        <form class="form-signin" method="post" action="/inserir-resumos">
                            <h1 class="h3 mb-3 font-weight-normal text-center">INSERÇÃO DE RESUMO</h1>

                            <label for="inputNome">Nome</label>
                            <input type="text" id="inputNome" class="form-control" placeholder="Nome" name="nome" maxlength="255" required>
                            <br>

                            <label for="inputMateria">Matéria</label>
                            <input type="text" id="inputMateria" class="form-control" placeholder="Matéria" name="materia" maxlength="255" required>
                            <br>

                            <label for="inputSubmateria">Submatéria</label>
                            <input type="text" id="inputSubmateria" class="form-control" placeholder="Submatéria" name="submateria" maxlength="255" required>
                            <br>

                            <label for="inputDescricao">Descrição</label>
                            <input type="text" id="inputDescricao" class="form-control" placeholder="Descrição" name="descricao" maxlength="255" required>
                            <br>

                            <label for="inputResumo">Resumo</label>
                            <br>
                            <textarea class="form-control" name="resumo" id="inputResumo" rows="5" placeholder="Resumo" required></textarea>
                            <br>

                            <label for="inputLink">Link</label>
                            <input type="text" id="inputLink" class="form-control" placeholder="Link" name="link" maxlength="255" required>
                            <br>

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="formCadastrarResumos">Inserir</button>
                        </form>

                        <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>