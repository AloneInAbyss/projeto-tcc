<?php
    require './public/scripts/banco.php';
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
	<title>Alteração de Usuários</title>
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
				<form class="form-signin" method="post" action="/alterar-admin">
					<label for="inputText">Digite o ID ou o E-mail</label>
					<input type="text" id="inputText" class="form-control" placeholder="ID ou E-mail" name="id" required>
				</form>
				<br>
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Usuário</th>
							<th scope="col">E-mail</th>
							<th scope="col">Senha</th>
							<th scope="col">#</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						if (isset($_POST['id']) && $_POST['id'] <> "") {
							$dados['id'] = $_POST['id'];

							$result = mysqli_query($connection,"SELECT * FROM usuario WHERE id = '".$dados['id']."' OR email = '".$dados['id']."';");
							$row = mysqli_num_rows($result);
							if ($row > 0) {
								while($linha = mysqli_fetch_array($result)){
            		?>
						<tr>
							<td scope="row">
								<?php echo $linha['id']; ?>
							</td>
							<td>
								<?php echo $linha['nome']; ?>
							</td>
							<td>
								<?php echo $linha['email'];?>
							</td>
							<td>
								<?php echo $linha['senha'];?>
							</td>
							<td>
								<form class="form-inline my-2 my-lg-0" method="post" action="/modificar-usuario">
									<input type="hidden" value="<?php echo $linha['id']; ?>" name="id">
									<button class="btn btn-outline-success my-2 my-sm-0" name="formAlterarUsuarios" type="submit" value="ir">Alterar</button>
								</form>
							</td>
						</tr>
					<?php 
								} 
							} 
						} else {
							$result = mysqli_query($connection, "SELECT * FROM usuario");
							$row = mysqli_num_rows($result);
							if ($row > 0) {
                    			while ($linha = mysqli_fetch_array($result)) {
            		?>
						<tr>
							<td scope="row">
								<?php echo $linha['id']; ?>
							</td>
							<td>
								<?php echo $linha['nome']; ?>
							</td>
							<td>
								<?php echo $linha['email'];?>
							</td>
							<td>
								<?php echo $linha['senha'];?>
							</td>
							<td>
								<form class="form-inline my-2 my-lg-0" method="post" action="/modificar-usuario">
									<input type="hidden" value="<?php echo $linha['id']; ?>" name="id">
									<button class="btn btn-outline-success my-2 my-sm-0" name="formAlterarUsuarios" type="submit" value="ir">Alterar</button>
								</form>
							</td>
						</tr>
					<?php   
								}
							}
						}
					?>
					</tbody>
				</table>

				<p class="mt-5 mb-3 text-muted text-center">&copy; <a href="/" style="text-decoration: none;">Nota1000</a> &middot; 2018</p>
			</div>
		</div>
	</div>
</body>
</html>