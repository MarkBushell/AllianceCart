<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('aiusers', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('email')->unique();
          $table->string('password');
          $table->string('firstname');
          $table->string('lastname');
          $table->rememberToken();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aiusers');
    }
}
