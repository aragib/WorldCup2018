<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('match_no');
            $table->string('play_stage', 45);
            $table->string('team_1', 45);
            $table->string('team_2', 45);
            $table->string('score_1', 45);
            $table->string('score_2', 45);
            $table->dateTime('play_at');
            $table->integer('venue_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
