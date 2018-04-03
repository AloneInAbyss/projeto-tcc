<?php
// Rotas da Aplicação
// A variável '$uri' já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
        $Controller->paginainicial();
        break;

    case '/materia-matematica':
    case '/materia-quimica':
    case '/materia-fisica':
    case '/materia-biologia':
    case '/materia-geografia':
    case '/materia-historia':
        $Controller->materias();
        break;
        
    default:
        $Controller->erro404();
        break;
}
