<?php

use Modules\Website\App\Models\ServiceDetail;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{

  public function up()
  {
    Schema::create('service_details', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();
      $table->integer('service_id')->unsigned();
      $table->integer('size_id')->unsigned()->nullable();
      $table->integer('color_id')->unsigned()->nullable();
      $table->integer('paper_id')->unsigned()->nullable();
      $table->integer('binding_id')->unsigned()->nullable();
      $table->integer('cellophane_id')->unsigned()->nullable();
      $table->integer('cover_id')->unsigned()->nullable();
      $table->integer('binding_direction')->unsigned()->nullable();
      $table->integer('media_id')->unsigned()->nullable()->comment('Preview image');
      $table->double('price', 22, 2)->nullable();
      $table->enum('status', ServiceDetail::$status)->default('publish');
      $table->float('discount', 22, 2)->default('0');
      $table->enum('discount_type', ServiceDetail::$discountTypes);

      $table->foreign('size_id')->references('id')->on('sizes')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('color_id')->references('id')->on('colors')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('paper_id')->references('id')->on('services')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('binding_id')->references('id')->on('bindings')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('cellophane_id')->references('id')->on('cellophane')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('cover_id')->references('id')->on('covers')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('media_id')->references('id')->on('media')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('serviceDetail');
  }
}
