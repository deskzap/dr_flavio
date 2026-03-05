<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // 1. Tabela users
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'          => ['type' => 'VARCHAR', 'constraint' => '255'],
            'email'         => ['type' => 'VARCHAR', 'constraint' => '150', 'unique' => true],
            'password_hash' => ['type' => 'VARCHAR', 'constraint' => '255'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users', true);

        // 2. Tabela site_settings
        $this->forge->addField([
            'id'              => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'site_title'      => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'whatsapp_number' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'email_contact'   => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'address_vitoria' => ['type' => 'TEXT', 'null' => true],
            'address_aracruz' => ['type' => 'TEXT', 'null' => true],
            'updated_at'      => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('site_settings', true);

        // Inserir registro padrão nas configurações
        $this->db->table('site_settings')->insert([
            'site_title'      => 'Dr. Flávio Gusmão',
            'whatsapp_number' => '(27) 99832-8484',
            'email_contact'   => 'contato.clinicafgt@gmail.com',
            'address_vitoria' => 'R. Aluysio Simões, 134 – Bento Ferreira, Vitória – ES, 29050-632',
            'address_aracruz' => 'Rua Fyori Terci, 174 – Vila Rica, Aracruz – ES, 29194-176',
            'updated_at'      => date('Y-m-d H:i:s')
        ]);

        // 3. Tabela doctor_profile
        $this->forge->addField([
            'id'                 => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'full_name'          => ['type' => 'VARCHAR', 'constraint' => '255'],
            'crm_rqe'            => ['type' => 'VARCHAR', 'constraint' => '255'],
            'short_bio'          => ['type' => 'TEXT', 'null' => true],
            'full_bio'           => ['type' => 'TEXT', 'null' => true],
            'profile_image_path' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'updated_at'         => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('doctor_profile', true);

        // Inserir perfil inicial
        $this->db->table('doctor_profile')->insert([
            'full_name'          => 'Dr. Flávio Gusmão Trancoso',
            'crm_rqe'            => 'CRM-ES 14486 | RQE Nº12665',
            'short_bio'          => 'Formação em Catarata, Cirurgia a Laser Ocular, Retina e Vítreo',
            'full_bio'           => '<p>Graduação em Medicina pela EMESCAM...</p>', // será editável no painel
            'profile_image_path' => 'assets/images/dr-flavio-1.jpg',
            'updated_at'         => date('Y-m-d H:i:s')
        ]);

        // 4. Tabela treatments
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'description' => ['type' => 'TEXT', 'null' => true],
            'category'    => ['type' => 'ENUM', 'constraint' => ['exame', 'doenca', 'cirurgia'], 'default' => 'exame'],
            'image_path'  => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'order_index' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'is_active'   => ['type' => 'BOOLEAN', 'default' => true],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('treatments', true);
    }

    public function down()
    {
        $this->forge->dropTable('treatments', true);
        $this->forge->dropTable('doctor_profile', true);
        $this->forge->dropTable('site_settings', true);
        $this->forge->dropTable('users', true);
    }
}
