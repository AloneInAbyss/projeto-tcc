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
        <link rel="stylesheet" href="/public/css/login.css"> 

    <!-- TÍTULO & ÍCONE DO SITE -->
    <title>Página de Login</title>
    <link rel="icon" href="/public/images/site-logo.png">
   
</head>
<body class="text-center">
    <form class="form-signin" method="post" action="/verificarDados">
      <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="display-4" style="letter-spacing: 10px; color: blue;">NOTA 1000</h1>

      <h1 class="h3 mt-5 mb-3 font-weight-normal">Faça seu login</h1>

      <label for="inputEmail" class="sr-only">Endereço de Email</label>
      <input type="email" id="inputEmail" class="form-control mt-4" placeholder="Endereço de Email" name="email" required>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control mt-3" placeholder="Senha" name="senha" required>

      <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Entrar</button>

      <p class="mt-5 mb-3 text-muted">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
    </form>
</body>