<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return voidp
     */
    public function run()
    {
        
        DB::insert('insert into estudante (nome, senha) values (?, ?)', ['pastel4', "123457"]);
    }
}
