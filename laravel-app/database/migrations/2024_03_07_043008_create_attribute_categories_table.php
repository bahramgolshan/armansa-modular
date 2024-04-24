<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('attribute_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name', 255);
            $table->string('description', 1000)->nullable();
        });
    }

    public function down()
    {
        Schema::drop('attribute_categories');
    }
}
