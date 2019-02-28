<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('links', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->uuid('uuid');
        $table->string('scenario');
        $table->string('medium');
        $table->timestamp('clicked')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('links');
    }
}
