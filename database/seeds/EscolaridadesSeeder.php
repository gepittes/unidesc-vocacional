<?php

use App\Models\Escolaridade\Escolaridade;
use Illuminate\Database\Seeder;

class EscolaridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $escolaridades = [
            ['ano' => '6º ano', 'descricao' => 'Ensino Fundamental'],
            ['ano' => '7º ano', 'descricao' => 'Ensino Fundamental'],
            ['ano' => '8º ano', 'descricao' => 'Ensino Fundamental'],
            ['ano' => '9º ano', 'descricao' => 'Ensino Fundamental'],
            ['ano' => '1º ano', 'descricao' => 'Ensino Médio'],
            ['ano' => '2º ano', 'descricao' => 'Ensino Médio'],
            ['ano' => '3º ano', 'descricao' => 'Ensino Médio'],
            ['ano' => 'Concluído ', 'descricao' => '2º ano Concluído'],
        ];

        foreach ($escolaridades as $esc) {
            Escolaridade::create([
                'ano' => $esc['ano'],
                'descricao' => $esc['descricao']
            ]);
        }


    }
}
