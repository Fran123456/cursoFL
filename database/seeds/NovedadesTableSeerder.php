<?php

use Illuminate\Database\Seeder;

class NovedadesTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\novedades::Class,1)->create();
    }
}
