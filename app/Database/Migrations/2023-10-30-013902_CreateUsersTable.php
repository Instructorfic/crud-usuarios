<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment'=> true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'apellido_paterno' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'apellido_materno' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
