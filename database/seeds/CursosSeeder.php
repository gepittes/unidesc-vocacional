<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            //GRUPO A
            ['id' => 1, 'curso_descricao' => 'Jornalismo', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 2, 'curso_descricao' => 'Publicidade', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 3, 'curso_descricao' => 'Educação Física', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 4, 'curso_descricao' => 'Pedagogia', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 5, 'curso_descricao' => 'Turismo', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 6, 'curso_descricao' => 'Agronomia', 'grupo_curso'=> 'A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            //GRUPO B
            ['id' => 7, 'curso_descricao' => 'Administração', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 8, 'curso_descricao' => 'Direito', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 9, 'curso_descricao' => 'Engenharia Civil', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 10, 'curso_descricao' => 'Ciências Contábeis', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 11, 'curso_descricao' => 'Gestão Ambiental ', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 12, 'curso_descricao' => 'Farmácia', 'grupo_curso'=> 'B', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            //GRUPO C
            ['id' => 13, 'curso_descricao' => 'Psicologia', 'grupo_curso'=> 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 14, 'curso_descricao' => 'Letras', 'grupo_curso'=> 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 15, 'curso_descricao' => 'Enfermagem', 'grupo_curso'=> 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 16, 'curso_descricao' => 'Fisioterapia', 'grupo_curso'=> 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 17, 'curso_descricao' => 'Medicina Veterinária', 'grupo_curso'=> 'C', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            //GRUPO D
            ['id' => 18, 'curso_descricao' => 'Sistemas de Informação', 'grupo_curso'=> 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 19, 'curso_descricao' => 'Analise e Desenvolvimento de Sistemas', 'grupo_curso'=> 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 20, 'curso_descricao' => 'Matemática', 'grupo_curso'=> 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 21, 'curso_descricao' => 'Banco de Dados', 'grupo_curso'=> 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 22, 'curso_descricao' => 'Redes de Computadores', 'grupo_curso'=> 'D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            //GRUPO E
            ['id' => 23, 'curso_descricao' => 'Trabalho Social', 'grupo_curso'=> 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 24, 'curso_descricao' => 'Nutrição', 'grupo_curso'=> 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 25, 'curso_descricao' => 'Biomedicina', 'grupo_curso'=> 'E', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            //GRUPO F
            ['id' => 26, 'curso_descricao' => 'Administração de Empresas', 'grupo_curso'=> 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 27, 'curso_descricao' => 'Gestão de Recursos Humanos', 'grupo_curso'=> 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['id' => 28, 'curso_descricao' => 'Área de venda e Empreendedorismo', 'grupo_curso'=> 'F', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],

        ]);
    }
}
