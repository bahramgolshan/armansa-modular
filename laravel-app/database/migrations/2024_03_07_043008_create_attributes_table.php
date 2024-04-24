<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{

    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('key', 100);
            $table->string('value', 1000)->nullable();
            $table->double('extra_fee', 22, 2)->nullable();
            $table->integer('attribute_category_id')->unsigned();

            $table->foreign('attribute_category_id')->references('id')->on('attribute_categories')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::drop('attributes');
    }
}
