<?php

use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_funcionario' => '1',
            'login' => 'admin',
            'senha' => '123',
            'privilegio' => '1',
            'email' => 'alvaro_neto96@hotmail.com'
        ]);
    }
}
