<?php
// Configurações Gerais
// Banco de Dados
require './public/scripts/banco.php';

// Declaração dos Namespaces dos Controladores & Instanciação dos Objetos
use Project\Controller\Controller;
$Controller = new Controller();

use Project\Controller\LoginController;
$LoginController = new LoginController();

use Project\Controller\DadosController;
$DadosController = new DadosController();

// Sessões
session_start();