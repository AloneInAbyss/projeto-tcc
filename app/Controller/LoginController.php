<?php
namespace Project\Controller;
use Project\Util\Login;

class LoginController
{
    // Ir para a página de login
    public function verificarLogin()
    {
        // Só permite continuar se a pessoa estiver logada
        if (Login::isLogged()) {
            require './app/views/admin/administracao.php';
            exit;
        } else {
            require './app/views/admin/login.php';
            exit;
        }
    }

    // Desconectar
    public function sair() {
        session_unset();
        header('Location: /');
        exit;
    }

    // Verifica dados de login do formulário
    public function verificarDados() {
        // Banco de dados
        require './public/scripts/banco.php';

        // Recebe o 'email' e 'senha'
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $sql = mysqli_query($connection, "select email, senha, nome from usuario WHERE email='".$_POST['email']."' and senha='".$_POST['senha']."';");
            $linha = mysqli_fetch_array($sql);
            $email = $linha['email'];
            $senha = $linha['senha'];
            $nome = $linha['nome'];

            if ($dados['email'] = $linha['email'] && $dados['senha'] = $linha['senha']) {
                // Autentica o usuário
                $_SESSION['user'] = $nome;
            }
        }
        // Verifica o login
        header('Location: /login');
    }
}