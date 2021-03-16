<?php 
    require './public/scripts/banco.php'; 
    
    if (isset($_POST['id']) && $_POST['id'] <> "") {
        $dados['id'] = $_POST['id'];

        $result = mysqli_query($connection, "SELECT * FROM resumos WHERE id=".$dados['id']);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            while ($linha = mysqli_fetch_array($result)){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $materia = $linha['materia'];
                $submateria = $linha['submateria'];
                $descricao = $linha['descricao'];
                $resumo = $linha['resumo'];
                $link = $linha['link'];
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
    <title>Modificação de Resumos</title>
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
                        <form class="form-signin" method="post" action="/modificar-resumos">
                            <h1 class="h3 mb-3 font-weight-normal text-center">MODIFICAÇÃO DE RESUMOS</h1>
                            
                            <label for="inputNome">Nome</label>
                            <input type="text" id="inputNome" class="form-control" value="<?php echo $nome ?>" placeholder="Nome do Tema" name="nome" required>
                            <br>

                            <label for="inputMateria">Matéria</label>
                            <input type="text" id="inputMateria" class="form-control" value="<?php echo $materia ?>" placeholder="Matéria" name="materia" required>
                            <br>

                            <label for="inputSubMateria">Submatéria</label>
                            <input type="text" id="inputSubMateria" class="form-control" value="<?php echo $submateria ?>" placeholder="Submatéria" name="submateria" required>
                            <br>

                            <label for="inputDescricao">Descrição</label>
                            <input type="text" id="inputDescricao" class="form-control" value="<?php echo $descricao ?>" placeholder="Descrição" name="descricao" required>
                            <br>

                            <label for="inputResumo">Resumo</label><br>
                            <textarea class="form-control" name="resumo" id="inputResumo" rows="5" required><?php echo $resumo ?></textarea>
                            <br><br>

                            <label for="inputLink">Link</label>
                            <input type="text" id="inputLink" class="form-control" value="<?php echo $link ?>" placeholder="Link" name="link" required>
                            <br>

                            <input type="hidden" value="<?php echo $id?>" name="id">

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="formModificarResumos">Alterar</button>
                        </form>

                        <p class="mt-5 mb-3 text-muted text-center pt-5">&copy; Nota1000 &middot; 2018</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>