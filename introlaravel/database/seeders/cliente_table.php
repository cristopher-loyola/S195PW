<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Cristopher',
                'apellido'=>'Loyola',
                'correo'=>'loyolacristo303@gmail.com',
                'telefono'=>'44212342134'
            ],
            [
                'nombre'=>'antonip',
                'apellido'=>'Martinez',
                'correo'=>'loyolacristo333@gmail.com',
                'telefono'=>'442248293'

            ],
            [
                'nombre'=>'Angel',
                'apellido'=>'Loyola',
                'correo'=>'122044391@upq.edu.mx',
                'telefono'=>'442731492'
            ]
        ]);
    }
}
