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


            // Grupo A
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre eletricidade',
                'grupo' => 'A', 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física nuclear',
                'grupo' => 'A', 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'observar planetas no telescópio',
                'grupo' => 'A', 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar célula no microscópio',
                'grupo' => 'A', 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a fabricação de tintas',
                'grupo' => 'A', 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre métodos de calcular',
                'grupo' => 'A', 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa para estudar química',
                'grupo' => 'A', 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa para estudar educação',
                'grupo' => 'A', 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer o projeto de um viaduto',
                'grupo' => 'A', 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'traduzir um romance',
                'grupo' => 'A', 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de física',
                'grupo' => 'A', 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer modelagem e desenho',
                'grupo' => 'A', 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre mecânica',
                'grupo' => 'A', 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física quântica',
                'grupo' => 'A', 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar os ossos e músculos do corpo humano',
                'grupo' => 'A', 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o mecanismo das máquinas em geral',
                'grupo' => 'A', 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'resolver quebra-cabeças matemáticos',
                'grupo' => 'A', 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'resolver quebra-cabeças com objetos',
                'grupo' => 'A', 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um orfanato',
                'grupo' => 'A', 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar um museu de ciência',
                'grupo' => 'A', 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de escritores famosos',
                'grupo' => 'A', 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de físicos famosos',
                'grupo' => 'A', 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma galeria de arte',
                'grupo' => 'A', 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo aparelho de laboratório',
                'grupo' => 'A', 'opcao' => 24
            ],

            // Grupo B
            [
                'altenativa' => 'A', 'texto_alternativa' => 'conhecer as leis da genética',
                'grupo' => 'B', 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o funcionamento de um motor',
                'grupo' => 'B', 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um laboratório de microbiologia',
                'grupo' => 'B', 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ir a uma exposição de produtos ',
                'grupo' => 'B', 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a respiração dos peixes',
                'grupo' => 'B', 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender a trabalhar com máquinas de calcular',
                'grupo' => 'B', 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar as propriedades terapêuticas das frutas',
                'grupo' => 'B', 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer um estudo sobre desemprego',
                'grupo' => 'B', 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a reprodução das aves',
                'grupo' => 'B', 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre literatura',
                'grupo' => 'B', 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências com plantas',
                'grupo' => 'B', 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração e paisagismo',
                'grupo' => 'B', 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a composição da atmosfera',
                'grupo' => 'B', 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar o DNA',
                'grupo' => 'B', 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ir a um laboratório de análises clínicas',
                'grupo' => 'B', 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a uma palestra sobre imunologia',
                'grupo' => 'B', 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'determinar o custo de uma nova máquina',
                'grupo' => 'B', 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pesquisar a cura da Aids',
                'grupo' => 'B', 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a causa da delinquência juvenil',
                'grupo' => 'B', 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos animais',
                'grupo' => 'B', 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de literatura',
                'grupo' => 'B', 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de biologia',
                'grupo' => 'B', 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler a seção de variedades de um jornal',
                'grupo' => 'B', 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a importância das vitaminas',
                'grupo' => 'B', 'opcao' => 24
            ],

            // Grupo C
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um asilo de velhos',
                'grupo' => 'C', 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar uma usina nuclear',
                'grupo' => 'C', 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar o problema do menor abonado',
                'grupo' => 'C', 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos insetos',
                'grupo' => 'C', 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'entrevistar famílias sobre educação dos filhos',
                'grupo' => 'C', 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'organizar e tabular pesquisas',
                'grupo' => 'C', 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a resolver problemas de crianças',
                'grupo' => 'C', 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar famílias de migrantes a se adaptar',
                'grupo' => 'C', 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ser voluntário em programas de adoção de menores',
                'grupo' => 'C', 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de cursos de redação',
                'grupo' => 'C', 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a produção de drogas',
                'grupo' => 'C', 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre arte clássica',
                'grupo' => 'C', 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de estatística',
                'grupo' => 'C', 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de pedagogia',
                'grupo' => 'C', 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar a composição dos alimentos',
                'grupo' => 'C', 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'analisar as causas do desemprego',
                'grupo' => 'C', 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'calcular o aumento do custo de vida',
                'grupo' => 'C', 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a condição social do trabalhador',
                'grupo' => 'C', 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a combater a mendicância',
                'grupo' => 'C', 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar na educação de favelados ',
                'grupo' => 'C', 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar informática',
                'grupo' => 'C', 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar novo método para erradicar o analfabetismo',
                'grupo' => 'C', 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'desenhar modelos de roupas',
                'grupo' => 'C', 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ensinar crianças a se orientar no trânsito',
                'grupo' => 'C', 'opcao' => 24
            ],

            // Grupo D
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de romancistas consagrados',
                'grupo' => 'D', 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de prêmios Nobel de física',
                'grupo' => 'D', 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a história da pintura',
                'grupo' => 'D', 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a história da ciência',
                'grupo' => 'D', 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'pertencer a um grupo literário',
                'grupo' => 'D', 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pertencer a um grupo da internet especializado em finanças',
                'grupo' => 'D', 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'aprender um idioma estrangeiro',
                'grupo' => 'D', 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender um novo sistema de catalogar animais',
                'grupo' => 'D', 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer um curso de literatura moderno',
                'grupo' => 'D', 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a um curso de gramática',
                'grupo' => 'D', 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma peça teatral',
                'grupo' => 'D', 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar numa peça',
                'grupo' => 'D', 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'projetar uma estrada',
                'grupo' => 'D', 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'recitar poemas',
                'grupo' => 'D', 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre protozoários',
                'grupo' => 'D', 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre poesia',
                'grupo' => 'D', 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma tese de química',
                'grupo' => 'D', 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'escrever uma novela',
                'grupo' => 'D', 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'participar de programas de recuperação de drogados',
                'grupo' => 'D', 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de um curso de arte',
                'grupo' => 'D', 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar regras de estilo e oratória',
                'grupo' => 'D', 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar literatura e interpretação de texto',
                'grupo' => 'D', 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar modelos de cartões-postais',
                'grupo' => 'D', 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar frases originais para esses cartões',
                'grupo' => 'D', 'opcao' => 24
            ],

            // Grupo E
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma exposição de escultura',
                'grupo' => 'E', 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo tipo de fax',
                'grupo' => 'E', 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre cinema e teatro',
                'grupo' => 'E', 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre avanços tecnológicos',
                'grupo' => 'E', 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'colecionar reproduções de pintura',
                'grupo' => 'E', 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'colecionar gráficos da inflação',
                'grupo' => 'E', 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar designs de objetos',
                'grupo' => 'E', 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar campanhas de trânsito',
                'grupo' => 'E', 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'bolar um novo tipo de cenografia para dança',
                'grupo' => 'E', 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'bolar uma nova iluminação para palco',
                'grupo' => 'E', 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'inventar estampas para tecido',
                'grupo' => 'E', 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar desenhos para histórias em quadrinhos',
                'grupo' => 'E', 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de química',
                'grupo' => 'E', 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer desenhos e gravura',
                'grupo' => 'E', 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'testar a resistência dos materiais',
                'grupo' => 'E', 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração de ambientes',
                'grupo' => 'E', 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'trabalhar com computador',
                'grupo' => 'E', 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'desenhar os móveis de uma casa',
                'grupo' => 'E', 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre o efeito estufa',
                'grupo' => 'E', 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a história da música',
                'grupo' => 'E', 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'redigir um roteiro de cinema',
                'grupo' => 'E', 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar num filme',
                'grupo' => 'E', 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar desenhos para embalagens de produtos',
                'grupo' => 'E', 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar ilustrações para artigos da imprensa',
                'grupo' => 'E', 'opcao' => 24
            ],
        ]);
    }
}
