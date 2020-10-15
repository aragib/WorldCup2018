<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('img', 100);
          $table->string('name', 45);
          $table->string('dob', 45);
          $table->string('country', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}
