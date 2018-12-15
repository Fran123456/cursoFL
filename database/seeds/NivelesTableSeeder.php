<?php

use Illuminate\Database\Seeder;

class NivelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nivel::Class,5)->create();
    }
}
