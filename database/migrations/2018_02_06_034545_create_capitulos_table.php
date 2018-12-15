<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitulos', function (Blueprint $table) {
          $table->increments('id');
        $table->integer('nivel_id')->unsigned();
        $table->string('name', 128);
        $table->string('slug', 128)->unique();
        $table->text('body');
        $table->text('url');
        $table->text('descarga_video');
        $table->text('descarga_material');
        $table->timestamps();

        $table->foreign('nivel_id')->references('id')->on('nivels')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capitulos');
    }
}
