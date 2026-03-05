<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'          => 'Admin Doutor',
            'email'         => 'admin@drflaviogusmao.com.br',
            'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ];

        // Simplifica a limpeza para não acumular durante testes
        $this->db->table('users')->truncate();
        $this->db->table('users')->insert($data);
    }
}
