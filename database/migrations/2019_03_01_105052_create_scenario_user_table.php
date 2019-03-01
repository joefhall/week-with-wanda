<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenarioUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('scenario_user', function (Blueprint $table) {
        $table->increments('id');
        $table->string('scenario_id');
        $table->unsignedInteger('user_id');
        $table->foreign('scenario_id')->references('id')->on('scenarios');
        $table->foreign('user_id')->references('id')->on('users');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('scenario_user');
    }
}
