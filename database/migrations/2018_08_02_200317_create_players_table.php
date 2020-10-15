<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('img', 100);
          $table->string('name', 45);
          $table->string('dob', 45);
          $table->integer('age');
          $table->string('height', 45);
          $table->string('s_foot', 45);
          $table->string('playing_pos', 45);
          $table->string('team_name', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
