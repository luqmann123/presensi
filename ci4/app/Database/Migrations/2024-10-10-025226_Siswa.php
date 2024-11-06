<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        // Membuat struktur tabel siswa
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'no_hp'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'created_at'  => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at'  => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'deleted_at'  => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        
        // Set primary key
        $this->forge->addKey('id', true);
        
        // Membuat tabel
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        // Menghapus tabel siswa jika rollback
        $this->forge->dropTable('siswa');
    }
}
