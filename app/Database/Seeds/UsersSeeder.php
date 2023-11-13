<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'nombre' => 'Juan',
                'apellido_paterno' => 'Pérez',
                'apellido_materno' => 'López'
            ],
            [
                'nombre'=> 'Pedro',
                'apellido_paterno' => 'López',
                'apellido_materno' => 'López'
            ],
            [
                'nombre' => 'Virginia',
                'apellido_paterno' => 'Ramos',
                'apellido_materno' => 'Ramos'
            ]

        ];

        $this->db->table('usuarios')->insertBatch($users);
    }
}
