<?php
namespace Project\Controller;
use Project\Util\Login;

class Controller
{
    public function paginainicial()
    {
        require './app/views/pagina-inicial.php';
    }

    public function materias()
    {
        require './app/views/conteudos/materias.php';
    }

    public function conteudos()
    {
        require './app/views/conteudos/conteudos.php';
    }

    public function exercicios()
    {
        require './app/views/modelo-exercicios.php';
    }

    public function sobrenos()
    {
        require './app/views/sobre-nos.php';
    }


    public function erro404()
    {
        require './app/views/erro404.php';
    }

    public function resultado()
    {
        require './app/views/results.php';
    }
}
