<?php
// Rotas da Aplicação

// A Variável '$uri' Contém os Dados da Rota Solicitada
switch ($uri) {
    /* ROTAS DAS PÁGINAS */
        case '/':
            $Controller->paginainicial();
            break;

        case '/materias':
            $Controller->materias();
            break;

        case '/conteudos':
            $Controller->conteudos();
            break;

        case '/exercicios':
            $Controller->exercicios();
            break;

        case '/resultado':
            $Controller->resultado();
            break;
    /* */

    /* ROTAS DE LOGIN */
        case '/login':
            $LoginController->verificarLogin();
            break;

        case '/verificarDados':
            $LoginController->verificarDados();
            break;

        case '/sair':
            $LoginController->sair();
            break;
    /* */

    /* ROTAS DE ADMIN */
        /* USUÁRIO */
        case '/inserir-admin':
            $DadosController->inserirAdmin();
            break;

        case '/alterar-admin':
            $DadosController->alterarAdmin();
            break;

        case '/modificar-admin':
            $DadosController->modificarAdmin();
            break;

        case '/deletar-admin':
            $DadosController->deletarAdmin();
            break;
        /* */

        /* RESUMOS */
        case '/inserir-resumos':
            $DadosController->inserirResumos();
            break;

        case '/alterar-resumos':
            $DadosController->alterarResumos();
            break;

        case '/modificar-resumos':
            $DadosController->modificarResumos();
            break;

        case '/deletar-resumos':
            $DadosController->deletarResumos();
            break;
        /* */

        /* QUESTÕES */
        case '/inserir-questoes':
            $DadosController->inserirQuestoes();
            break;

        case '/alterar-questoes':
            $DadosController->alterarQuestoes();
            break;

        case '/modificar-questoes':
            $DadosController->modificarQuestoes();
            break;

        case '/deletar-questoes':
            $DadosController->deletarQuestoes();
            break;
        /* */
    /* */

    // Rota Padrão
    default:
        $Controller->paginainicial();
        break;
}
