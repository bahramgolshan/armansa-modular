<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{

  public function up()
  {
    Schema::create('faqs', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('question', 5000);
      $table->string('answer', 10000);
      $table->float('order')->default(1)->nullable();
    });
  }

  public function down()
  {
    Schema::drop('faqs');
  }
}
