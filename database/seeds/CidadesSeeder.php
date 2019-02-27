<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert([
            ['id' => 1, 'nome' => 'Novo Gama', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 2, 'nome' => 'Gama', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 3, 'nome' => 'Valparaiso de Goias', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 4, 'nome' => 'Luziânia', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 5, 'nome' => 'Cristalina', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 6, 'nome' => 'Brasília', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 7, 'nome' => 'Cidade Ocidental', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 8, 'nome' => 'Águas Claras', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 9, 'nome' => 'Taguatinga', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 10, 'nome' => 'Ceilândia', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 11, 'nome' => 'Brazlândia', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 12, 'nome' => 'Sobradinho', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 13, 'nome' => 'Planaltina', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 14, 'nome' => 'Núcleo Bandeirante', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 15, 'nome' => 'Guará', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 16, 'nome' => 'Samambaia', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 17, 'nome' => 'Santa Maria', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 18, 'nome' => 'São Sebastião', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 19, 'nome' => 'Recanto das Emas', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 20, 'nome' => 'Lago Sul', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 21, 'nome' => 'Riacho Fundo', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 22, 'nome' => 'Lago Norte', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 23, 'nome' => 'Candangolândia', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 24, 'nome' => 'Riacho Fundo II', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 25, 'nome' => 'Park Way', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 26, 'nome' => 'Itapoã', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 27, 'nome' => 'Outros', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
