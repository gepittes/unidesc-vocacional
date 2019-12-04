<?php

use App\Models\Universidade\Universidade;
use Illuminate\Database\Seeder;

class UniversidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universidades = [
            ['nm_universidade' => 'UNIDESC'],
        ];

        foreach ($universidades as $uni) {
            Universidade::create([
                'nm_universidade' => $uni['nm_universidade']
            ]);
        }
    }
}
