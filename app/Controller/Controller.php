<?php
namespace Project\Controller;
use Project\Util\Login;

class Controller
{
    // Página Principal
    public function paginainicial()
    {
        require './app/views/pagina-inicial.php';
    }

    // Matérias
    public function materias()
    {
        require './public/scripts/banco.php';

        if (isset($_POST['materia'])) {
            $materias = $_POST['materia'];

            switch ($materias) {
                case "matematica":
                    $titulo = "Matemática";
                    break;
    
                case "biologia":
                    $titulo = "Biologia";
                    break;
    
                case "quimica":
                    $titulo = "Química";
                    break;
    
                case "fisica":
                    $titulo = "Física";
                    break;
    
                case "historia":
                    $titulo = "História";
                    break;
    
                case "portugues":
                    $titulo = "Língua Portuguesa";
                    break;
    
                case "literatura":
                    $titulo = "Literatura";
                    break;
    
                case "geografia":
                    $titulo = "Geografia";
                    break;
            }
            
            require './app/views/conteudos/materias.php';
        } else {
            header('Location: /');
        }
    }

    // Conteúdos das Matérias
    public function conteudos()
    {
        require './public/scripts/banco.php';

        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $result1 = mysqli_query($connection, "SELECT * FROM resumos WHERE id='".$id."'");
            $row1 = mysqli_num_rows($result1);
            if ($row1 > 0) {
                while ($linha1 = mysqli_fetch_array($result1)) {
                    $nome = $linha1['nome'];
                    $materia = $linha1['materia'];
                    $submateria = $linha1['submateria'];
                    $resumo = $linha1['resumo'];
                }

                switch ($materia) {
                    case "Matemática":
                        $titulo = "matematica";
                        break;
        
                    case "Biologia":
                        $titulo = "biologia";
                        break;
        
                    case "Química":
                        $titulo = "quimica";
                        break;
        
                    case "Física":
                        $titulo = "fisica";
                        break;
        
                    case "História":
                        $titulo = "historia";
                        break;
        
                    case "Língua Portuguesa":
                        $titulo = "portugues";
                        break;
        
                    case "Literatura":
                        $titulo = "literatura";
                        break;
        
                    case "Geografia":
                        $titulo = "geografia";
                        break;
                }

                require './app/views/conteudos/conteudos.php';
            } else {
                header('Location: /');
            }
         } else {
            header('Location: /');
        }
    }

    // Exercícios dos Conteúdos
    public function exercicios()
    {
        
        require './app/views/modelo-exercicios.php';
    }

    // Resultado da Pesquisa
    public function resultado()
    {
        require './public/scripts/banco.php';
        
        if (isset($_POST['buscar'])) {
            $buscar=$_POST['buscar'];
            require './app/views/results.php';
        } else {
            header('Location: /');
        }
    }
}