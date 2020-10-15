<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_tables', function (Blueprint $table) {
           $table->engine = 'InnoDB';
           $table->increments('id');
           $table->string('team_name');
           $table->integer('mp');
           $table->integer('w');
           $table->integer('d');
           $table->integer('l');
           $table->integer('gf');
           $table->integer('ga');
           $table->integer('plus/minus');
           $table->integer('pts');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_tables');
    }
}
