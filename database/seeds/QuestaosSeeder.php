<?php

use Illuminate\Database\Seeder;

class QuestaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'questoes')->insert([


            // Grupo 1
            [
                'altenativa' => 'A', 'nome' => 'ler sobre eletricidade',
                'grupo' => 1, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre física nuclear',
                'grupo' => 1, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'nome' => 'observar planetas no telescópio',
                'grupo' => 1, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'nome' => 'observar célula no microscópio',
                'grupo' => 1, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre a fabricação de tintas',
                'grupo' => 1, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre métodos de calcular',
                'grupo' => 1, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'nome' => 'obter uma bolsa para estudar química',
                'grupo' => 1, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'nome' => 'obter uma bolsa para estudar educação',
                'grupo' => 1, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'nome' => 'fazer o projeto de um viaduto',
                'grupo' => 1, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'nome' => 'traduzir um romance',
                'grupo' => 1, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'nome' => 'fazer experiências num laboratório de física',
                'grupo' => 1, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'nome' => 'fazer modelagem e desenho',
                'grupo' => 1, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre mecânica',
                'grupo' => 1, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre física quântica',
                'grupo' => 1, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar os ossos e músculos do corpo humano',
                'grupo' => 1, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer o mecanismo das máquinas em geral',
                'grupo' => 1, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'nome' => 'resolver quebra-cabeças matemáticos',
                'grupo' => 1, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'nome' => 'resolver quebra-cabeças com objetos',
                'grupo' => 1, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'nome' => 'visitar um orfanato',
                'grupo' => 1, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'nome' => 'visitar um museu de ciência',
                'grupo' => 1, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler obras de escritores famosos',
                'grupo' => 1, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer trabalhos de físicos famosos',
                'grupo' => 1, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'nome' => 'visitar uma galeria de arte',
                'grupo' => 1, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer um novo aparelho de laboratório',
                'grupo' => 1, 'opcao' => 24
            ],

            // Grupo 2
            [
                'altenativa' => 'A', 'nome' => 'conhecer as leis da genética',
                'grupo' => 2, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer o funcionamento de um motor',
                'grupo' => 2, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'nome' => 'visitar um laboratório de microbiologia',
                'grupo' => 2, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'nome' => 'ir a uma exposição de produtos ',
                'grupo' => 2, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar a respiração dos peixes',
                'grupo' => 2, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'nome' => 'aprender a trabalhar com máquinas de calcular',
                'grupo' => 2, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'nome' => 'analisar as propriedades terapêuticas das frutas',
                'grupo' => 2, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'nome' => 'fazer um estudo sobre desemprego',
                'grupo' => 2, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre a reprodução das aves',
                'grupo' => 2, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre literatura',
                'grupo' => 2, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'nome' => 'fazer experiências com plantas',
                'grupo' => 2, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'nome' => 'fazer decoração e paisagismo',
                'grupo' => 2, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar a composição da atmosfera',
                'grupo' => 2, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'nome' => 'estudar o DNA',
                'grupo' => 2, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'nome' => 'ir a um laboratório de análises clínicas',
                'grupo' => 2, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'nome' => 'assistir a uma palestra sobre imunologia',
                'grupo' => 2, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'nome' => 'determinar o custo de uma nova máquina',
                'grupo' => 2, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'nome' => 'pesquisar a cura da Aids',
                'grupo' => 2, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar a causa da delinquência juvenil',
                'grupo' => 2, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'nome' => 'observar o comportamento dos animais',
                'grupo' => 2, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'nome' => 'obter uma bolsa de literatura',
                'grupo' => 2, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'nome' => 'obter uma bolsa de biologia',
                'grupo' => 2, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler a seção de variedades de um jornal',
                'grupo' => 2, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre a importância das vitaminas',
                'grupo' => 2, 'opcao' => 24
            ],

            // Grupo 3
            [
                'altenativa' => 'A', 'nome' => 'visitar um asilo de velhos',
                'grupo' => 3, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'nome' => 'visitar uma usina nuclear',
                'grupo' => 3, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar o problema do menor abonado',
                'grupo' => 3, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'nome' => 'observar o comportamento dos insetos',
                'grupo' => 3, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'nome' => 'entrevistar famílias sobre educação dos filhos',
                'grupo' => 3, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'nome' => 'organizar e tabular pesquisas',
                'grupo' => 3, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'nome' => 'ajudar a resolver problemas de crianças',
                'grupo' => 3, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'nome' => 'ajudar famílias de migrantes a se adaptar',
                'grupo' => 3, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'nome' => 'ser voluntário em programas de adoção de menores',
                'grupo' => 3, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'nome' => 'participar de cursos de redação',
                'grupo' => 3, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre a produção de drogas',
                'grupo' => 3, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre arte clássica',
                'grupo' => 3, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'nome' => 'obter uma bolsa de estatística',
                'grupo' => 3, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'nome' => 'obter uma bolsa de pedagogia',
                'grupo' => 3, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'nome' => 'analisar a composição dos alimentos',
                'grupo' => 3, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'nome' => 'analisar as causas do desemprego',
                'grupo' => 3, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'nome' => 'calcular o aumento do custo de vida',
                'grupo' => 3, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'nome' => 'estudar a condição social do trabalhador',
                'grupo' => 3, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'nome' => 'ajudar a combater a mendicância',
                'grupo' => 3, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'nome' => 'ajudar na educação de favelados ',
                'grupo' => 3, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar informática',
                'grupo' => 3, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'nome' => 'estudar novo método para erradicar o analfabetismo',
                'grupo' => 3, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'nome' => 'desenhar modelos de roupas',
                'grupo' => 3, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'nome' => 'ensinar crianças a se orientar no trânsito',
                'grupo' => 3, 'opcao' => 24
            ],

            // Grupo 4
            [
                'altenativa' => 'A', 'nome' => 'ler obras de romancistas consagrados',
                'grupo' => 4, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer trabalhos de prêmios Nobel de física',
                'grupo' => 4, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar a história da pintura',
                'grupo' => 4, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'nome' => 'estudar a história da ciência',
                'grupo' => 4, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'nome' => 'pertencer a um grupo literário',
                'grupo' => 4, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'nome' => 'pertencer a um grupo da internet especializado em finanças',
                'grupo' => 4, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'nome' => 'aprender um idioma estrangeiro',
                'grupo' => 4, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'nome' => 'aprender um novo sistema de catalogar animais',
                'grupo' => 4, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'nome' => 'fazer um curso de literatura moderno',
                'grupo' => 4, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'nome' => 'assistir a um curso de gramática',
                'grupo' => 4, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'nome' => 'escrever uma peça teatral',
                'grupo' => 4, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'nome' => 'trabalhar numa peça',
                'grupo' => 4, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'nome' => 'projetar uma estrada',
                'grupo' => 4, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'nome' => 'recitar poemas',
                'grupo' => 4, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre protozoários',
                'grupo' => 4, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre poesia',
                'grupo' => 4, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'nome' => 'escrever uma tese de química',
                'grupo' => 4, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'nome' => 'escrever uma novela',
                'grupo' => 4, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'nome' => 'participar de programas de recuperação de drogados',
                'grupo' => 4, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'nome' => 'participar de um curso de arte',
                'grupo' => 4, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'nome' => 'estudar regras de estilo e oratória',
                'grupo' => 4, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'nome' => 'estudar literatura e interpretação de texto',
                'grupo' => 4, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'nome' => 'criar modelos de cartões-postais',
                'grupo' => 4, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'nome' => 'criar frases originais para esses cartões',
                'grupo' => 4, 'opcao' => 24
            ],

            // Grupo 5
            [
                'altenativa' => 'A', 'nome' => 'visitar uma exposição de escultura',
                'grupo' => 5, 'opcao' => 1
            ],
            [
                'altenativa' => 'B', 'nome' => 'conhecer um novo tipo de fax',
                'grupo' => 5, 'opcao' => 2
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre cinema e teatro',
                'grupo' => 5, 'opcao' => 3
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre avanços tecnológicos',
                'grupo' => 5, 'opcao' => 4
            ],
            [
                'altenativa' => 'A', 'nome' => 'colecionar reproduções de pintura',
                'grupo' => 5, 'opcao' => 5
            ],
            [
                'altenativa' => 'B', 'nome' => 'colecionar gráficos da inflação',
                'grupo' => 5, 'opcao' => 6
            ],
            [
                'altenativa' => 'A', 'nome' => 'criar designs de objetos',
                'grupo' => 5, 'opcao' => 7
            ],
            [
                'altenativa' => 'B', 'nome' => 'criar campanhas de trânsito',
                'grupo' => 5, 'opcao' => 8
            ],
            [
                'altenativa' => 'A', 'nome' => 'bolar um novo tipo de cenografia para dança',
                'grupo' => 5, 'opcao' => 9
            ],
            [
                'altenativa' => 'B', 'nome' => 'bolar uma nova iluminação para palco',
                'grupo' => 5, 'opcao' => 10
            ],
            [
                'altenativa' => 'A', 'nome' => 'inventar estampas para tecido',
                'grupo' => 5, 'opcao' => 11
            ],
            [
                'altenativa' => 'B', 'nome' => 'criar desenhos para histórias em quadrinhos',
                'grupo' => 5, 'opcao' => 12
            ],
            [
                'altenativa' => 'A', 'nome' => 'fazer experiências num laboratório de química',
                'grupo' => 5, 'opcao' => 13
            ],
            [
                'altenativa' => 'B', 'nome' => 'fazer desenhos e gravura',
                'grupo' => 5, 'opcao' => 14
            ],
            [
                'altenativa' => 'A', 'nome' => 'testar a resistência dos materiais',
                'grupo' => 5, 'opcao' => 15
            ],
            [
                'altenativa' => 'B', 'nome' => 'fazer decoração de ambientes',
                'grupo' => 5, 'opcao' => 16
            ],
            [
                'altenativa' => 'A', 'nome' => 'trabalhar com computador',
                'grupo' => 5, 'opcao' => 17
            ],
            [
                'altenativa' => 'B', 'nome' => 'desenhar os móveis de uma casa',
                'grupo' => 5, 'opcao' => 18
            ],
            [
                'altenativa' => 'A', 'nome' => 'ler sobre o efeito estufa',
                'grupo' => 5, 'opcao' => 19
            ],
            [
                'altenativa' => 'B', 'nome' => 'ler sobre a história da música',
                'grupo' => 5, 'opcao' => 20
            ],
            [
                'altenativa' => 'A', 'nome' => 'redigir um roteiro de cinema',
                'grupo' => 5, 'opcao' => 21
            ],
            [
                'altenativa' => 'B', 'nome' => 'trabalhar num filme',
                'grupo' => 5, 'opcao' => 22
            ],
            [
                'altenativa' => 'A', 'nome' => 'criar desenhos para embalagens de produtos',
                'grupo' => 5, 'opcao' => 23
            ],
            [
                'altenativa' => 'B', 'nome' => 'criar ilustrações para artigos da imprensa',
                'grupo' => 5, 'opcao' => 24
            ],


        ]);
    }
}
