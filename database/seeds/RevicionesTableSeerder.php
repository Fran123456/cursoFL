
<?php

use Illuminate\Database\Seeder;

class RevicionesTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          factory(App\Reviciones::Class,1)->create();
    }
}
