<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{

    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->string('name', 500);
            $table->integer('media_id')->unsigned();
            $table->boolean('is_featured');

            $table->foreign('media_id')->references('id')->on('media')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('partners');
    }
}
