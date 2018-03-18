<?php
// Rotas da Aplicação
// A variável '$uri' já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
        $Controller->index();
        break;
        
    default:
        die('Invalid Route! Error 404');
        break;
}
