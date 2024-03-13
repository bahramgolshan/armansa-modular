<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 255);
            $table->string('value', 5000)->nullable();
            $table->string('description', 10000)->nullable();
        });
    }

    public function down()
    {
        Schema::drop('settings');
    }
}
