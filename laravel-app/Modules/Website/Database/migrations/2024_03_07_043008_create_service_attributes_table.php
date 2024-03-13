<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceAttributesTable extends Migration
{

    public function up()
    {
        Schema::create('service_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('attribute_id')->unsigned();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('service_attributes');
    }
}
