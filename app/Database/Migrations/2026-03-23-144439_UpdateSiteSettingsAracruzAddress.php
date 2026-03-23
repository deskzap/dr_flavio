<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateSiteSettingsAracruzAddress extends Migration
{
    public function up()
    {
        // Atualiza o endereço antigo na database para o novo em Aracruz
        $this->db->table('site_settings')->update([
            'address_aracruz' => "Clínica Intermédica (segundo andar, consultório oftalmológico)\nRua Napoleão Nunes Ribeiro dos Santos, 130 - Centro, Aracruz - ES, 29190-026"
        ]);
    }

    public function down()
    {
        // Retorna ao endereço anterior, caso seja feito rollback
        $this->db->table('site_settings')->update([
            'address_aracruz' => 'Rua Fyori Terci, 174 – Vila Rica, Aracruz – ES, 29194-176'
        ]);
    }
}
