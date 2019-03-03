<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaoOpcoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questao_opcoes')->insert([
            // QUESTAO 1
            ['id' => 1, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'a. Objetividade.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 2, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'b. Ótima capacidade de análise.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 3, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'c. Ótima capacidade em estruturar processos.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 4, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'd. Habilidade para propor novas formas de  agir  ou pelo  agudo senso estético.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 5, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'e. Excelência na comunicação.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 6, 'questao_enunciado_id' => 1, 'opcao_enunciado' => 'f. Capacidade de ser determinado.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            // QUESTAO 2
            ['id' => 7, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'a. Tenta finalizar  rapidamente o  assunto e partir para a ação.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 8, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'b. Analisa a situação e avalia as alternativas que  podem ser usadas.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 9, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'c. Levanta todos os pontos, buscando ser prudente na sua posição.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 10, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'd. Procura sentir o clima e  agir  confiando mais em sua  intuição do que na razão.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 11, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'e. Busca uma solução que seja boa a todos os envolvidos.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 12, 'questao_enunciado_id' => 2, 'opcao_enunciado' => 'f. Sente-se desafiado e  busca soluções para garantir o sucesso da ação.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 3
            ['id' => 13, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'a. Pode "colocar a mão na massa".', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 14, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'b. Aprende muito.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 15, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'c. Oferece  segurança.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 16, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'd. Pode auxiliar as pessoas.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 17, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'e. Surpreende ou emociona as pessoas.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 18, 'questao_enunciado_id' => 3, 'opcao_enunciado' => 'f. É desafiado e pode alcançar sucesso.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 4
            ['id' => 19, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'a. Os fatos.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 20, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'b. O estudo e a reflexão.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 21, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'c. A rotina e a precisão.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 22, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'd. O prazer e as emoções.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 23, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'e. O direito e bem estar de todos.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 24, 'questao_enunciado_id' => 4, 'opcao_enunciado' => 'f. O sucesso e o poder.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 5
            ['id' => 25, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'a. Interagir ou pensar demais.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 26, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'b. Lidar com emoções ou assuntos superficiais.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 27, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'c. Fazer algo sem ter manual ou explicação.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 28, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'd. Seguir rotinas e regras.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 29, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'e. Executar tarefas técnicas ou mecânicas.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 30, 'questao_enunciado_id' => 5, 'opcao_enunciado' => 'f. Ser comandado.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 6
            ['id' => 31, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'a. Demoram muito para tomar uma decisão.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 32, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'b. Emitem opinião sem conhecer bem o assunto.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 33, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'c. Trapaceiam ou ignoram regras.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 34, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'd. Agem sempre da mesma maneira e são pouco criativas.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 35, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'e. Não respeitam os direitos das  outras pessoas.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 36, 'questao_enunciado_id' => 6, 'opcao_enunciado' => 'f. Demonstram preguiça ou submissão.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 7
            ['id' => 37, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'a. Incentiva o aluno a  fazer suas próprias experiências e decidir.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 38, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'b. Estimula o aluno a questionar e aprofundar conhecimentos.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 39, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'c. Transmite o conteúdo completo, sem deixar nada pra trás.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 40, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'd. Ajuda a identificar os interesses e talentos de seus alunos.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 41, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'e. Ensina a trabalhar em grupo.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 42, 'questao_enunciado_id' => 7, 'opcao_enunciado' => 'f. Prepara para ser alguém no mercado de trabalho, não apenas mais um.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 8
            ['id' => 43, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'a. Prefere atividades manuais.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 44, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'b. Presta atenção e é estudioso.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 45, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'c. É bem organizado.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 46, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'd. Fica sonhando, desenha ou escreve poemas.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 47, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'e. Busca ajudar os colegas a tirar dúvidas.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 48, 'questao_enunciado_id' => 8, 'opcao_enunciado' => 'f. Tem iniciativa e toma a frente  nas situações.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 9
            ['id' => 49, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'a. Franco e honesto.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 50, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'b. Ponderado e  criterioso nas suas escolhas.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 51, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'c. Cuidadoso para falar e agir.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 52, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'd. Sensível ou despojado ao tratar o outro.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 53, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'e. Empático e acolhedor.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 54, 'questao_enunciado_id' => 9, 'opcao_enunciado' => 'f. Autoritário ou sedutor.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 10
            ['id' => 55, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'a. Realista.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 56, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'b. Intelectual.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 57, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'c. Cautelosa.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 58, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'd. Sensível.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 59, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'e. Empática.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 60, 'questao_enunciado_id' => 10, 'opcao_enunciado' => 'f. Persuasiva.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 11
            ['id' => 61, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'a. Instalar, cozinhar, realizar tarefas manuais.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 62, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'b. Ler um livro científico.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 63, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'c. Elaborar um orçamento ou planejamento de um projeto.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 64, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'd. Aprender um instrumento, desenhar ou fazer teatro.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 65, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'e. Envolver-se  em um trabalho voluntário.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 66, 'questao_enunciado_id' => 11, 'opcao_enunciado' => 'f. Ser  representante de classe.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 12
            ['id' => 67, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'a. Razão.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 68, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'b. Investigação.', 'opcao_letra' => 'b', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 69, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'c. Disciplina.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 70, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'd. Imaginação.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 71, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'e. Colaboração.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 72, 'questao_enunciado_id' => 12, 'opcao_enunciado' => 'f. Ambição.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 13
            ['id' => 73, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'a. Máquinas, atividade corporal, lidar com alimentos, plantas ou animais.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 74, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'b. Pesquisa, diagnóstico ou crítica.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 75, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'c. Planejamento, ordenação ou cálculo.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 76, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'd. Criação, expressão ou beleza.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 77, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'e. Relacionamento, cuidado ou mediação interpessoal.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 78, 'questao_enunciado_id' => 13, 'opcao_enunciado' => 'f. Estratégia, desafios,  compra e venda.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 14
            ['id' => 79, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'a. Quer ir direto ao ponto.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 80, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'b. Analisa bem a natureza e o objetivo do trabalho antes de propor ações.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 81, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'c. Contribui para que  o grupo siga todas as instruções.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 82, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'd. Propõe uma apresentação surpreendente ou tocante.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 83, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'e. Discute as ideias com todos os membros do grupo.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 84, 'questao_enunciado_id' => 14, 'opcao_enunciado' => 'f. Conduz o grupo a agir em determinada direção.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],

            //QUESTAO 15
            ['id' => 85, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'a. Uma ação vale  mais que um conjunto de teorias.', 'opcao_letra' => 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 86, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'b. As atividades teóricas e autônomas são mais importantes do que as realizadas em grupo.', 'opcao_letra' => 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 87, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'c. É importante  controlar os afetos e  realizar as atividades de forma rotineira e estruturada.', 'opcao_letra' => 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 88, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'd. O contato interpessoal, poder  expressar-se livremente,  perceber as reações e as emoções das pessoas são importantes no trato profissional.', 'opcao_letra' => 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 89, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'e.  É necessário ter sensibilidade e responsabilidade  para auxiliar,  orientar e resolver as dificuldades dos outros.', 'opcao_letra' => 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
            ['id' => 90, 'questao_enunciado_id' => 15, 'opcao_enunciado' => 'f. Persuadir  as outras pessoas, ter iniciativa e assumir a liderança  são  características do profissional de sucesso.', 'opcao_letra' => 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
