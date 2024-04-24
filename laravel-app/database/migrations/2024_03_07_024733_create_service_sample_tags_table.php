<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSampleTagsTable extends Migration
{

    public function up()
    {
        Schema::create('service_sample_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_sample_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('service_sample_id')->references('id')->on('service_samples')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('service_sample_tags');
    }
}
