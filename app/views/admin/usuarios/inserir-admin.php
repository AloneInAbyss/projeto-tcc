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
    <title>Inserção de Usuários</title>
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
                        <form class="form-signin" method="post" action="/inserir-admin">
                            <h1 class="h3 mb-3 font-weight-normal text-center">INSERÇÃO DE ADMINISTRADOR</h1>
                            
                            <label for="inputEmail">Email</label>
                            <input type="email" id="inputEmail" class="form-control mt-1" placeholder="Endereço de Email" name="email" maxlength="50" required>
                            <br>
                            
                            <label for="inputPassword">Senha</label>
                            <input type="password" id="inputPassword" class="form-control mt-1" placeholder="Senha" name="senha" maxlength="20" required>
                            <br>

                            <label for="inputName">Nome</label>
                            <input type="text" id="inputName" class="form-control mt-1" placeholder="Nome de Exibição" name="nome" maxlength="25" required>
                            <br>
                            
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Inserir</button>

                            <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>