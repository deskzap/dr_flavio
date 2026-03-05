<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// --- ROTAS DO PAINEL ADMINISTRATIVO ---
$routes->group('admin', function($routes) {
    // Autenticação
    $routes->get('login', 'Admin\AuthController::login');
    $routes->post('authenticate', 'Admin\AuthController::authenticate');
    $routes->get('logout', 'Admin\AuthController::logout');

    // Dashboard (Protegido pelo construtor do BaseAdminController)
    $routes->get('/', 'Admin\DashboardController::index');
});
