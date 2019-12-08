<?php
namespace Project\Controller;
use Project\Util\Login;

class DadosController
{
    /* USUÁRIO */
        // INSERIR ADMIN
        public function inserirAdmin() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])) {
                    require './public/scripts/banco.php';
                    
                    $sql = "INSERT INTO usuario VALUES(0,'".$_POST['email']."','".$_POST['senha']."', '".$_POST['nome']."');";

                    $connection->query($sql);
                }
                // Exibe a página
                require './app/views/login/usuarios/inserir-usuario.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }

        // ALTERAR ADMIN
        public function alterarAdmin() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                require './app/views/login/usuarios/alterar-usuario.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }

        // MODIFICAR ADMIN
        public function modificarAdmin() {
            if (Login::isLogged()) {
                if (isset($_POST['formAlterarUsuarios'])) {
                    if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])) {
                        require './public/scripts/banco.php';

                        $sql = "UPDATE usuario SET email='".$_POST['email']."', senha='".$_POST['senha']."', nome='".$_POST['nome']."' WHERE id=".$_POST['id'];
                        $connection->query($sql); 

                        header('Location: /alterar-admin');
                        exit;
                    } else {
                        require './app/views/login/usuarios/modificar-usuario.php';
                        exit;
                    }
                } else {
                    require './app/views/login/usuarios/alterar-usuario.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }

        // DELETAR ADMIN
        public function deletarAdmin() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['id'])) {
                    require './public/scripts/banco.php';

                    $sql = "DELETE FROM usuario WHERE id=".$_POST['id'];
                    $connection->query($sql); 

                    header('Location: /login');
                    exit;
                } else {
                    require './app/views/login/usuarios/deletar-usuario.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }
    /* */

    /* RESUMOS */
        // INSERIR RESUMOS
        public function inserirResumos() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['formCadastrarResumos'])) {
                    require './public/scripts/banco.php';
                    
                    $sql = "INSERT INTO resumos VALUES(0,'".$_POST['nome']."','".$_POST['materia']."','".$_POST['submateria']."','".$_POST['descricao']."','"
                    .$_POST['resumo']."');";

                    $connection->query($sql);
                }

                require './app/views/login/resumos/inserir-resumos.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }

        // ALTERAR RESUMOS
        public function alterarResumos() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                require './app/views/login/resumos/alterar-resumos.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }

        // MODIFICAR RESUMOS
        public function modificarResumos() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['formAlterarResumos'])) {
                    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['materia']) && isset($_POST['submateria'])  && isset($_POST['descricao'])  && isset($_POST['resumo'])) {
                        require './public/scripts/banco.php';

                        $sql = "UPDATE resumos SET nome='".$_POST['nome']."', materia='".$_POST['materia']."', submateria='".$_POST['submateria']."', descricao='".$_POST['descricao']."', resumo='".$_POST['resumo']."' WHERE id=".$_POST['id'];
                        $connection->query($sql);

                        header('Location: /alterar-resumos');
                        exit;
                    } else {
                        require './app/views/login/resumos/modificar-resumos.php';
                        exit;
                    }
                } else {
                    require './app/views/login/resumos/alterar-resumos.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }

        // DELETAR RESUMOS
        public function deletarResumos() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['id'])) {
                    require './public/scripts/banco.php';

                    $sql = "DELETE FROM resumos WHERE id=".$_POST['id'];
                    $connection->query($sql); 

                    header('Location: /login');
                    exit;
                } else {
                    require './app/views/login/resumos/deletar-resumos.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }
    /* */

    /* QUESTÕES */
        // INSERIR QUESTÕES
        public function inserirQuestoes() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['formCadastrarQuestoes'])) {
                    require './public/scripts/banco.php';

                    $sql = "INSERT INTO questao VALUES(0,'".$_POST['resposta']."','".$_POST['questao']."','".$_POST['alternativa1']."','".$_POST['alternativa2']."','"
                    .$_POST['alternativa3']."','".$_POST['alternativa4']."','".$_POST['alternativa5']."','".$_POST['materia']."','".$_POST['imagem']."');";
                    
                    $connection->query($sql); 
                }

                require './app/views/login/questoes/inserir-questoes.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }
        
        // ALTERAR QUESTÕES
        public function alterarQuestoes() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                require './app/views/login/questoes/alterar-questoes.php';
                exit;
            } else {
                header('Location: /login');
                exit;
            }
        }

        // MODIFICAR QUESTÕES
        public function modificarQuestoes() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['formAlterarQuestoes'])) {
                    if (isset($_POST['id']) && isset($_POST['resposta']) && isset($_POST['questao']) && isset($_POST['alternativa1'])  && isset($_POST['alternativa2'])  && isset($_POST['alternativa3']) && isset($_POST['alternativa4']) && isset($_POST['alternativa5']) && isset($_POST['materia']) && isset($_POST['imagem'])) {
                        require './public/scripts/banco.php';

                        $sql = "UPDATE questao SET resposta='".$_POST['resposta']."', questao='".$_POST['questao']."', alternativa1='".$_POST['alternativa1']."', alternativa2='".$_POST['alternativa2']."', alternativa3='".$_POST['alternativa3']."', alternativa4='".$_POST['alternativa4']."', alternativa5='".$_POST['alternativa5']."', materia='".$_POST['materia']."', imagem='".$_POST['imagem']."' WHERE id=".$_POST['id'];
                        $connection->query($sql);

                        header('Location: /alterar-questoes');
                        exit;
                    } else {
                        require './app/views/login/questoes/modificar-questoes.php';
                        exit;
                    }
                } else {
                    require './app/views/login/questoes/alterar-questoes.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }

        // DELETAR QUESTÕES
        public function deletarQuestoes() {
            // Só permite continuar se a pessoa estiver logada
            if (Login::isLogged()) {
                if (isset($_POST['id'])) {
                    require './public/scripts/banco.php';

                    $sql = "DELETE FROM questao WHERE id=".$_POST['id'];
                    $connection->query($sql); 

                    header('Location: /login');
                    exit;
                } else {
                    require './app/views/login/questoes/deletar-questoes.php';
                    exit;
                }
            } else {
                header('Location: /login');
                exit;
            }
        }
    /* */
}