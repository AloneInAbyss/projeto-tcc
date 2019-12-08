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
    <title>Pagina de Administração</title>
    <link rel="icon" href="/public/images/site-logo.png">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <h1 style="border-bottom: 1px solid #f1f1f1"><span class="small">Olá</span> <?php echo $_SESSION['user']; ?><span class="float-right"><a style="text-decoration: none; font-size: 0.7em; color: #a1a1a1;" href="/sair">Sair</a></span></h1>
                <br><br>
                <!-- CARD USUÁRIOS -->
                <div class="card text-center">
                <div class="card-header">
                    ADMINISTRADOR
                </div>
                <div class="card-body">
                    <h5 class="card-title">Inserção de Usuários</h5>
                    <p class="card-text">Use esta seção para inserir um novo administrador para o site.</p>
                    <a href="/inserir-admin" class="btn btn-primary">Inserir &gt;</a>
                    <a href="/alterar-admin" class="btn btn-primary">Alterar &gt;</a>
                    <a href="/deletar-admin" class="btn btn-primary">Deletar &gt;</a>
                </div>
                </div>
                <!-- /CARD -->
                <br>
                <!-- CARD USUÁRIOS -->
                <div class="card text-center">
                <div class="card-header">
                    RESUMOS
                </div>
                <div class="card-body">
                    <h5 class="card-title">Inserção de Resumos</h5>
                    <p class="card-text">Use esta seção para inserir novos resumos para o site.</p>
                    <a href="/inserir-resumos" class="btn btn-primary">Inserir &gt;</a>
                    <a href="/alterar-resumos" class="btn btn-primary">Alterar &gt;</a>
                    <a href="/deletar-resumos" class="btn btn-primary">Deletar &gt;</a>
                </div>
                </div>
                <!-- /CARD -->
                <br>
                <!-- CARD USUÁRIOS -->
                <div class="card text-center">
                <div class="card-header">
                    QUESTÕES
                </div>
                <div class="card-body">
                    <h5 class="card-title">Inserção de Questões</h5>
                    <p class="card-text">Use esta seção para inserir novas questões para o site.</p>
                    <a href="/inserir-questoes" class="btn btn-primary">Inserir &gt;</a>
                    <a href="/alterar-questoes" class="btn btn-primary">Alterar &gt;</a>
                    <a href="/deletar-questoes" class="btn btn-primary">Deletar &gt;</a>
                </div>
                </div>
                <!-- /CARD -->

                <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JQUERY, POPPER & JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>