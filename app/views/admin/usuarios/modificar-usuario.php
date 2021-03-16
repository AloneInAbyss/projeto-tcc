<?php 
    require './public/scripts/banco.php'; 
    
    if (isset($_POST['id']) && $_POST['id'] <> "") {
        $dados['id'] = $_POST['id'];

        $result = mysqli_query($connection, "SELECT * FROM usuario WHERE id=".$dados['id']);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            while ($linha = mysqli_fetch_array($result)){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $senha = $linha['senha'];
            }
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

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    
    <!-- CSS -->
        <!-- CSS GERAL -->
        <link rel="stylesheet" href="/public/css/style.css">

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>Modificação de Usuários</title>
    <link rel="icon" href="/public/images/site-logo.png">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-2 col-8">
                <h1 style="border-bottom: 1px solid #f1f1f1">
                    <span class="small">Olá</span> <?php echo $_SESSION['user'];?>
                    <span class="float-right">
                        <a style="text-decoration: none; font-size: 0.7em; color: #a1a1a1;" href="/administracao">
                            Voltar
                        </a>
                    </span>
                </h1>
                <br><br>
                <div class="row">
                    <div class="offset-1 col-10">
                        <form class="form-signin" method="post" action="/modificar-usuario">
                            <h1 class="h3 mb-3 font-weight-normal text-center">MODIFICAÇÃO DE ADMINISTRADOR</h1>
                            
                            <label for="inputUser">Usuário</label>
                            <input type="text" id="inputNome" class="form-control" value="<?php echo $nome ?>" placeholder="Nome de Usuário" name="nome" required>
                            <br>

                            <label for="inputEmail">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control" value="<?php echo $email ?>" placeholder="E-mail" name="email" required>
                            <br>

                            <label for="inputText">Senha</label>
                            <input type="text" id="inputPassword" class="form-control" value="<?php echo $senha ?>" placeholder="Senha" name="senha" required>
                            <br>

                            <input type="hidden" value="<?php echo $dados['id']?>" name="id">

                            <button class="btn btn-lg btn-primary btn-block" name="formModificarUsuarios" type="submit">Alterar</button>
                        </form>

                        <p class="mt-5 mb-3 text-muted text-center pt-5">&copy; Nota1000 &middot; 2018</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>