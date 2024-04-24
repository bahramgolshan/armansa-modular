<?php

use App\Models\Invoice;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

  public function up()
  {
    Schema::create('invoices', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();
      $table->integer('customer_id')->unsigned();
      $table->enum('status', Invoice::$status)->default('awaiting_approval')->nullable();
      $table->float('additional_discount', 22, 2)->default('0')->nullable();
      $table->float('additional_price', 22, 2)->default('0')->nullable();
      $table->float('tax', 22, 2)->default('0')->nullable();
      $table->float('final_price', 22, 2)->default('0')->nullable();

      $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('invoices');
  }
}
