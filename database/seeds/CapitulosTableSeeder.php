<?php

use Illuminate\Database\Seeder;

class CapitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Capitulo::class, 20)->create();
         
    }
}
