<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosCaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso_descricaos')->insert([
            //GRUPO A
            ['id' => 1, 'caracteristica' => 'Realista',
            'descricao' => 'É objetivo, lógico e evita situações ambíguas. Possui interesse em atividades físicas, mecânicas que exijam destreza e força ou em atividades manuais como construção, reparo, culinária e cirurgia. Gosta de resolver problemas concretos, com resultados tangíveis. Valoriza, acima de tudo, os fatos. Pode ser pouco sociável e carecer de habilidade interpessoal, evitando situações ambíguas e muito subjetivas. Mostra-se mais reservado e inflexível.',
            'grupo_letra' => 'A', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ],
            //GRUPO B
            ['id' => 2, 'caracteristica' => 'Investigativo',
                'descricao' => 'É analítico, curioso, autocentrado, podendo até aparentar certa frieza. Possui interesse em atividades acadêmicas, teóricas e/ou científicas. Com seu senso crítico aguçado, gosta de resolver problemas abstratos que desafiam o intelecto.Valoriza o estudo, a pesquisa e a reflexão. Pode se sentir desconfortável diante de emoções intensas, mas é aberto a questões subjetivas e abstratas. Prefere atividades teóricas e autônomas o que o torna mais independente com relação a vínculos grupais e mais centrado em si mesmo.',
                'grupo_letra' => 'B', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ],
            //GRUPO C
            ['id' => 3, 'caracteristica' => 'Convencional',
                'descricao' => 'É organizado, detalhista, conservador e disciplinado. Respeita regras e é considerado confiável. Possui interesse em atividades que exijam planejamento, método, ou envolvam medição, cálculo e dinheiro. Prefere resolver problemas estruturados. Valoriza a rotina e a segurança. Tende a controlar os afetos e a sentir-se à vontade ao desenvolver atividades rotineiras e sistematizadas.',
                'grupo_letra' => 'C', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ],
            //GRUPO D
            ['id' => 4, 'caracteristica' => 'Artístico',
                'descricao' => 'É intuitivo, sonhador, aberto a experiências e foge das convenções sociais. Possui percepção aguçada e interesse em atividades que envolvam imaginação, beleza, produção artística ou inovação. Gosta de se expressar através de meios como música, teatro, dança, desenho, poesia e canto. Valoriza o prazer e as emoções. Aprecia o contato interpessoal, quando está seguro de poder expressar-se livremente. É aberto a estímulos subjetivos e emocionais, capaz de perceber as reações das pessoas através de compreensão empática.',
                'grupo_letra' => 'D', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ],
            //GRUPO E
            ['id' => 5, 'caracteristica' => 'Social',
                'descricao' => 'É comunicativo, interativo, solidário e bom mediador de conflitos. Possui interesse em atender demandas sociais, mobilizar, ensinar, tratar e orientar pessoas. Valoriza o direito e o bem estar alheio, assim como o trabalho em equipe. Manifesta sensibilidade e responsabilidade na busca de auxiliar, orientar, tratar e resolver as dificuldades dos outros. Gosta de se sentir aceito e respeitado em suas atividades, ter a atenção para si através de seu jeito expansivo.',
                'grupo_letra' => 'E', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ],
            //GRUPO F
            ['id' => 6, 'caracteristica' => 'Empreendedor',
                'descricao' => 'É um líder natural: enérgico, persuasivo, competitivo, corajoso e determinado. Gosta de situações novas e desafiadoras. Possui interesse em atividades administrativas e comerciais. Valoriza o sucesso, o poder e o status. Extrovertido, tem iniciativa e quer assumir a liderança.',
                'grupo_letra' => 'F', 'created_at' => date("Y-m-d H:m:s"), 'updated_at' => date("Y-m-d H:m:s")
            ]
        ]);
    }
}
