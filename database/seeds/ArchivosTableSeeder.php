<?php

use Illuminate\Database\Seeder;

class ArchivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\ArchivosExtra::Class,2)->create();
    }
}
