<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@unidesc.com',
            'password' => bcrypt('paodebatata'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ana Carolina',
            'email' => 'ana@unidesc.com',
            'password' => bcrypt('paodebatata'),
        ]);
    }
}
