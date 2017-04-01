<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MataKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("mataKuliah", function(Blueprint $table){
          $table->increments('id');
          $table->string('mataKuliah', 100);
          $table->string('dosen', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("mataKuliah");
    }
}
