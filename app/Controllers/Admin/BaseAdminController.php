<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**
 * Controlar base para o painel administrativo.
 * Garante que todas as rotas filhas exijam autenticação.
 */
class BaseAdminController extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Executa a inicialização do BaseController
        parent::initController($request, $response, $logger);

        // Verifica a sessão.
        // O método session() está disponível através do framework usando a helper ou \Config\Services.
        $session = session();
        
        // Se não estiver logado, redireciona para a página de login.
        if (!$session->get('is_logged_in')) {
            // Em vez de retornar um redirect simples que pode não parar o fluxo de construtores filhos,
            // jogamos uma Response para forçar a parada, ou podemos usar Filters no CI4 (que é a prática recomendada).
            // Para simplificar, enviaremos um header location e encerraremos o processamento.
            header("Location: " . base_url('admin/login'));
            exit;
        }
    }
}
