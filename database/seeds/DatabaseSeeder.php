<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             LocalidadesSeeder::class,
             UsersTableSeeder::class,
             QuestaosSeeder::class,
             EscolaridadesSeeder::class,
             UniversidadesSeeder::class
         ]);
    }
}
