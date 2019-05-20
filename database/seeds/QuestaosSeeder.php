<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questoes')->insert([


            // Grupo 1
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre eletricidade',
                'grupo' => 1, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física nuclear',
                'grupo' => 1, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'observar planetas no telescópio',
                'grupo' => 1, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar célula no microscópio',
                'grupo' => 1, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a fabricação de tintas',
                'grupo' => 1, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre métodos de calcular',
                'grupo' => 1, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa para estudar química',
                'grupo' => 1, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa para estudar educação',
                'grupo' => 1, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer o projeto de um viaduto',
                'grupo' => 1, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'traduzir um romance',
                'grupo' => 1, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de física',
                'grupo' => 1, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer modelagem e desenho',
                'grupo' => 1, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre mecânica',
                'grupo' => 1, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física quântica',
                'grupo' => 1, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar os ossos e músculos do corpo humano',
                'grupo' => 1, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o mecanismo das máquinas em geral',
                'grupo' => 1, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'resolver quebra-cabeças matemáticos',
                'grupo' => 1, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'resolver quebra-cabeças com objetos',
                'grupo' => 1, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um orfanato',
                'grupo' => 1, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar um museu de ciência',
                'grupo' => 1, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de escritores famosos',
                'grupo' => 1, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de físicos famosos',
                'grupo' => 1, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma galeria de arte',
                'grupo' => 1, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo aparelho de laboratório',
                'grupo' => 1, 'opcao' => 24
            ],

            // Grupo 2
            [
                'altenativa' => 'A', 'texto_alternativa' => 'conhecer as leis da genética',
                'grupo' => 2, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o funcionamento de um motor',
                'grupo' => 2, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um laboratório de microbiologia',
                'grupo' => 2, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ir a uma exposição de produtos ',
                'grupo' => 2, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a respiração dos peixes',
                'grupo' => 2, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender a trabalhar com máquinas de calcular',
                'grupo' => 2, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar as propriedades terapêuticas das frutas',
                'grupo' => 2, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer um estudo sobre desemprego',
                'grupo' => 2, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a reprodução das aves',
                'grupo' => 2, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre literatura',
                'grupo' => 2, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências com plantas',
                'grupo' => 2, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração e paisagismo',
                'grupo' => 2, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a composição da atmosfera',
                'grupo' => 2, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar o DNA',
                'grupo' => 2, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ir a um laboratório de análises clínicas',
                'grupo' => 2, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a uma palestra sobre imunologia',
                'grupo' => 2, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'determinar o custo de uma nova máquina',
                'grupo' => 2, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pesquisar a cura da Aids',
                'grupo' => 2, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a causa da delinquência juvenil',
                'grupo' => 2, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos animais',
                'grupo' => 2, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de literatura',
                'grupo' => 2, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de biologia',
                'grupo' => 2, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler a seção de variedades de um jornal',
                'grupo' => 2, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a importância das vitaminas',
                'grupo' => 2, 'opcao' => 24
            ],

            // Grupo 3
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um asilo de velhos',
                'grupo' => 3, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar uma usina nuclear',
                'grupo' => 3, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar o problema do menor abonado',
                'grupo' => 3, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos insetos',
                'grupo' => 3, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'entrevistar famílias sobre educação dos filhos',
                'grupo' => 3, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'organizar e tabular pesquisas',
                'grupo' => 3, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a resolver problemas de crianças',
                'grupo' => 3, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar famílias de migrantes a se adaptar',
                'grupo' => 3, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ser voluntário em programas de adoção de menores',
                'grupo' => 3, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de cursos de redação',
                'grupo' => 3, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a produção de drogas',
                'grupo' => 3, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre arte clássica',
                'grupo' => 3, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de estatística',
                'grupo' => 3, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de pedagogia',
                'grupo' => 3, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar a composição dos alimentos',
                'grupo' => 3, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'analisar as causas do desemprego',
                'grupo' => 3, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'calcular o aumento do custo de vida',
                'grupo' => 3, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a condição social do trabalhador',
                'grupo' => 3, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a combater a mendicância',
                'grupo' => 3, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar na educação de favelados ',
                'grupo' => 3, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar informática',
                'grupo' => 3, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar novo método para erradicar o analfabetismo',
                'grupo' => 3, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'desenhar modelos de roupas',
                'grupo' => 3, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ensinar crianças a se orientar no trânsito',
                'grupo' => 3, 'opcao' => 24
            ],

            // Grupo 4
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de romancistas consagrados',
                'grupo' => 4, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de prêmios Nobel de física',
                'grupo' => 4, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a história da pintura',
                'grupo' => 4, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a história da ciência',
                'grupo' => 4, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'pertencer a um grupo literário',
                'grupo' => 4, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pertencer a um grupo da internet especializado em finanças',
                'grupo' => 4, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'aprender um idioma estrangeiro',
                'grupo' => 4, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender um novo sistema de catalogar animais',
                'grupo' => 4, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer um curso de literatura moderno',
                'grupo' => 4, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a um curso de gramática',
                'grupo' => 4, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma peça teatral',
                'grupo' => 4, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar numa peça',
                'grupo' => 4, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'projetar uma estrada',
                'grupo' => 4, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'recitar poemas',
                'grupo' => 4, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre protozoários',
                'grupo' => 4, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre poesia',
                'grupo' => 4, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma tese de química',
                'grupo' => 4, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'escrever uma novela',
                'grupo' => 4, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'participar de programas de recuperação de drogados',
                'grupo' => 4, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de um curso de arte',
                'grupo' => 4, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar regras de estilo e oratória',
                'grupo' => 4, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar literatura e interpretação de texto',
                'grupo' => 4, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar modelos de cartões-postais',
                'grupo' => 4, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar frases originais para esses cartões',
                'grupo' => 4, 'opcao' => 24
            ],

            // Grupo 5
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma exposição de escultura',
                'grupo' => 5, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo tipo de fax',
                'grupo' => 5, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre cinema e teatro',
                'grupo' => 5, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre avanços tecnológicos',
                'grupo' => 5, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'colecionar reproduções de pintura',
                'grupo' => 5, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'colecionar gráficos da inflação',
                'grupo' => 5, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar designs de objetos',
                'grupo' => 5, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar campanhas de trânsito',
                'grupo' => 5, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'bolar um novo tipo de cenografia para dança',
                'grupo' => 5, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'bolar uma nova iluminação para palco',
                'grupo' => 5, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'inventar estampas para tecido',
                'grupo' => 5, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar desenhos para histórias em quadrinhos',
                'grupo' => 5, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de química',
                'grupo' => 5, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer desenhos e gravura',
                'grupo' => 5, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'testar a resistência dos materiais',
                'grupo' => 5, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração de ambientes',
                'grupo' => 5, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'trabalhar com computador',
                'grupo' => 5, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'desenhar os móveis de uma casa',
                'grupo' => 5, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre o efeito estufa',
                'grupo' => 5, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a história da música',
                'grupo' => 5, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'redigir um roteiro de cinema',
                'grupo' => 5, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar num filme',
                'grupo' => 5, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar desenhos para embalagens de produtos',
                'grupo' => 5, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar ilustrações para artigos da imprensa',
                'grupo' => 5, 'opcao' => 24
            ],


        ]);
    }
}
