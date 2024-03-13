<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('invoice_id')->unsigned();
            $table->integer('service_detail_id')->unsigned();
            $table->integer('quantity')->unsigned()->default('1');

            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('service_detail_id')->references('id')->on('service_details')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('invoice_details');
    }
}
