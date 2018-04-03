<?php

namespace Project\Controller;

class Controller
{
    public function paginainicial()
    {
        require './app/views/pagina-inicial.php';
    }

    public function materias()
    {
        require './app/views/modelo-materia.php';
    }

    public function erro404()
    {
        require './app/views/erro404.php';
    }
    
    public function temas()
    {
        require './app/views/modelo-pagina-materia.php';
    }
}
