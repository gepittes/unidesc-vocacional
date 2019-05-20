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
             UsersTableSeeder::class,
             CidadesSeeder::class,
             EMedioSeeder::class,
             EFundamentalSeeder::class,
             QuestaosSeeder::class
         ]);
    }
}
