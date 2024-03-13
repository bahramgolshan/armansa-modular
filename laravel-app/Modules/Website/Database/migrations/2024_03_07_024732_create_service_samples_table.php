<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSamplesTable extends Migration
{

    public function up()
    {
        Schema::create('service_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 500);
            $table->string('description', 5000)->nullable();
            $table->float('order')->default(1);
            $table->integer('media_id')->unsigned();
            $table->boolean('is_featured')->default(false);
            $table->integer('service_id')->unsigned();

            $table->foreign('media_id')->references('id')->on('media')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('service_samples');
    }
}
