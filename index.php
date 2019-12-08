<?php
// Autoload do Composer
require './vendor/autoload.php';

// Identificador Uniforme de Recurso (URI)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Arquivo de Configurações & Rotas
require './config.php';
require './routes.php';