<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{

  public function up()
  {
    Schema::create('achievements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('prefix', 100)->nullable();
      $table->string('number', 10);
      $table->string('suffix', 100)->nullable();
      $table->float('order')->default(1)->nullable();
      $table->boolean('is_featured')->default(true)->nullable();
    });
  }

  public function down()
  {
    Schema::drop('achievements');
  }
}
