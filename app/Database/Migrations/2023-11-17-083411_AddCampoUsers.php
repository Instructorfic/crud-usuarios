<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use CodeIgniter\Database\RawSql;

class AddCampoUsers extends Migration
{
    public function up()
    {
        $fields = [
        'fecha_alta' => [
            'type'    => 'TIMESTAMP',
            'default' => new RawSql('CURRENT_TIMESTAMP'),
        ]
        ];
        $this->forge->addColumn('usuarios',$fields);
    }

    public function down()
    {
        $this->forge->dropColumn('usuarios','fecha_alta');
    }
}
