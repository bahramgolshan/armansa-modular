<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Website\App\Models\Payment;

class CreatePaymentsTable extends Migration
{

  public function up()
  {
    Schema::create('payments', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();
      $table->integer('invoice_id')->unsigned();
      $table->integer('customer_id')->unsigned();
      $table->enum('status', Payment::$status);
      $table->double('amount', 22, 2);
      $table->string('reterival_ref_no', 255)->nullable();
      $table->string('system_trace_no', 255)->nullable();
      $table->datetime('transaction_date')->nullable();
      $table->string('transaction_result', 2000)->nullable();
      $table->string('verification_result', 2000)->nullable();

      $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('payments');
  }
}
