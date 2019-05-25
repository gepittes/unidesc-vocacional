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
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física nuclear',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'observar planetas no telescópio',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar célula no microscópio',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a fabricação de tintas',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre métodos de calcular',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa para estudar química',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa para estudar educação',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer o projeto de um viaduto',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'traduzir um romance',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de física',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer modelagem e desenho',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre mecânica',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre física quântica',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar os ossos e músculos do corpo humano',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o mecanismo das máquinas em geral',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'resolver quebra-cabeças matemáticos',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'resolver quebra-cabeças com objetos',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um orfanato',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar um museu de ciência',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de escritores famosos',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de físicos famosos',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma galeria de arte',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo aparelho de laboratório',
                'grupo' => 'A'],

            // Grupo B
            [
                'altenativa' => 'A', 'texto_alternativa' => 'conhecer as leis da genética',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer o funcionamento de um motor',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um laboratório de microbiologia',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ir a uma exposição de produtos ',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a respiração dos peixes',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender a trabalhar com máquinas de calcular',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar as propriedades terapêuticas das frutas',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer um estudo sobre desemprego',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a reprodução das aves',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre literatura',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências com plantas',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração e paisagismo',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a composição da atmosfera',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar o DNA',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ir a um laboratório de análises clínicas',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a uma palestra sobre imunologia',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'determinar o custo de uma nova máquina',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pesquisar a cura da Aids',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a causa da delinquência juvenil',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos animais',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de literatura',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de biologia',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler a seção de variedades de um jornal',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a importância das vitaminas',
                'grupo' => 'B'],

            // Grupo C
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar um asilo de velhos',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'visitar uma usina nuclear',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar o problema do menor abonado',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'observar o comportamento dos insetos',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'entrevistar famílias sobre educação dos filhos',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'organizar e tabular pesquisas',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a resolver problemas de crianças',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar famílias de migrantes a se adaptar',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ser voluntário em programas de adoção de menores',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de cursos de redação',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre a produção de drogas',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre arte clássica',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'obter uma bolsa de estatística',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'obter uma bolsa de pedagogia',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'analisar a composição dos alimentos',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'analisar as causas do desemprego',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'calcular o aumento do custo de vida',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a condição social do trabalhador',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ajudar a combater a mendicância',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ajudar na educação de favelados ',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar informática',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar novo método para erradicar o analfabetismo',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'desenhar modelos de roupas',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ensinar crianças a se orientar no trânsito',
                'grupo' => 'C'],

            // Grupo D
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler obras de romancistas consagrados',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer trabalhos de prêmios Nobel de física',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar a história da pintura',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar a história da ciência',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'pertencer a um grupo literário',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'pertencer a um grupo da internet especializado em finanças',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'aprender um idioma estrangeiro',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'aprender um novo sistema de catalogar animais',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer um curso de literatura moderno',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'assistir a um curso de gramática',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma peça teatral',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar numa peça',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'projetar uma estrada',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'recitar poemas',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre protozoários',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre poesia',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'escrever uma tese de química',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'escrever uma novela',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'participar de programas de recuperação de drogados',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'participar de um curso de arte',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'estudar regras de estilo e oratória',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'estudar literatura e interpretação de texto',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar modelos de cartões-postais',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar frases originais para esses cartões',
                'grupo' => 'D'],

            // Grupo E
            [
                'altenativa' => 'A', 'texto_alternativa' => 'visitar uma exposição de escultura',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'conhecer um novo tipo de fax',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre cinema e teatro',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre avanços tecnológicos',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'colecionar reproduções de pintura',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'colecionar gráficos da inflação',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar designs de objetos',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar campanhas de trânsito',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'bolar um novo tipo de cenografia para dança',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'bolar uma nova iluminação para palco',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'inventar estampas para tecido',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar desenhos para histórias em quadrinhos',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'fazer experiências num laboratório de química',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer desenhos e gravura',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'testar a resistência dos materiais',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'fazer decoração de ambientes',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'trabalhar com computador',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'desenhar os móveis de uma casa',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'ler sobre o efeito estufa',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'ler sobre a história da música',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'redigir um roteiro de cinema',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'trabalhar num filme',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'criar desenhos para embalagens de produtos',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'criar ilustrações para artigos da imprensa',
                'grupo' => 'E'],
        ]);
    }
}
