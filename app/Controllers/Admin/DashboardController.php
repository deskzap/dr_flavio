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
}
