<?php
namespace Project\Controller;
use Project\Util\Login;

class LoginController
{
    // Ir para a página de login
    public function verificarLogin()
    {
        // Verifica se está logado
        if (Login::isLogged()) {
            require './app/views/login/administracao.php';
            exit;
        } else {
            require './app/views/login/login.php';
            exit;
        }
    }

    // Deslogar
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
            $sql = mysqli_query($connection, "SELECT email, senha, nome FROM usuario WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."';");
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