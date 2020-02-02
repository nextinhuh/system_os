<?php

use Illuminate\Database\Seeder;

class FuncionarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionarios')->insert([
            'nome' => 'Álvaro de Albuquerque Silva Neto',
            'setor' => 'Gabinete do Prefeito',
            'cargo' => 'Estagiário'
        ]);
    }
}
