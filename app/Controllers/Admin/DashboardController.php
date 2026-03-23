<?php

namespace App\Controllers\Admin;

class DashboardController extends BaseAdminController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Painel de Controle',
            'user'  => session()->get()
        ];
        
        return view('admin/dashboard', $data);
    }

    public function migrate()
    {
        try {
            $migrate = \Config\Services::migrations();
            $migrate->latest();
            return redirect()->to('admin')->with('success', 'Migração de banco de dados rodada com super sucesso!');
        } catch (\Throwable $e) {
            return redirect()->to('admin')->with('error', 'Erro durante a migração: ' . $e->getMessage());
        }
    }
}
