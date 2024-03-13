<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBindingsTable extends Migration
{

    public function up()
    {
        Schema::create('bindings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name', 255);
            $table->string('code', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::drop('bindings');
    }
}
