<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['identificacion'=>'1052362365',   
            'name' => 'Victor Alfonso Delgado Bolaños',
            'email' => 'victor199211@hotmail.com',
            'password' => Hash::make('victor1234'),
            'celular' => '3104557906',
            'role' => 'admin'
            ]
        ];
        DB::table('users')->insert($datos);
    }
}
