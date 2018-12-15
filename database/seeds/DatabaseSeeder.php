<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NivelesTableSeeder::class);
        $this->call(CapitulosTableSeeder::class);

          $this->call(ArchivosTableSeeder::class);
            $this->call(NovedadesTableSeerder::class);
              $this->call(RevicionesTableSeerder::class);
    }
}
