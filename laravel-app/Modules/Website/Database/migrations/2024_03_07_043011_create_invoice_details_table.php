<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Website\App\Models\Binding;
use Modules\Website\App\Models\Media;

class CreateInvoiceDetailsTable extends Migration
{

  public function up()
  {
    Schema::create('invoice_details', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->integer('invoice_id')->unsigned();
      $table->integer('service_detail_id')->unsigned();
      $table->integer('quantity')->unsigned()->default('1')->nullable();
      $table->integer('circulation')->unsigned();
      $table->integer('number_of_pages')->unsigned();
      $table->enum('binding_direction', Binding::$bindingDirection)->nullable();
      $table->string('file_name', 500);
      $table->string('extension', 10);
      $table->enum('type', Media::$types);

      $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('service_detail_id')->references('id')->on('service_details')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('invoice_details');
  }
}
