<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaoEnunciadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questao_enunciados')->insert([
            ['id' => 1, 'enunciado_questao' => '1. Nas atividades que realiza, você se destaca por sua:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 2, 'enunciado_questao' => '2. Em uma discussão, você:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 3, 'enunciado_questao' => '3. A profissão ideal é aquela em que você:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 4, 'enunciado_questao' => '4. O que você mais valoriza?', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 5, 'enunciado_questao' => '5. Quase sempre, você não gosta de:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 6, 'enunciado_questao' => '6. O que mais incomoda é quando as pessoas:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 7, 'enunciado_questao' => '7. Um bom professor é aquele que:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 8, 'enunciado_questao' => '8. Em sala de aula, você:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 9, 'enunciado_questao' => '9. Nos seus relacionamentos, você costuma ser:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 10, 'enunciado_questao' => '10. Seus amigos o descrevem como uma pessoa:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 11, 'enunciado_questao' => '11. Você se sente mais confortável ao:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 12, 'enunciado_questao' => '12. A palavra mais combina com você é:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 13, 'enunciado_questao' => '13. Você prefere atividades que envolvam:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 14, 'enunciado_questao' => '14. Ao realizar um trabalho em grupo, você:', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 15, 'enunciado_questao' => '15. Com qual frase você mais se identifica?', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
