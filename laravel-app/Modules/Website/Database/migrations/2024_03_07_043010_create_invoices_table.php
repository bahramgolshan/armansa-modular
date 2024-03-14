<?php

use Modules\Website\App\Models\Invoice;
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
      $table->integer('user_id')->unsigned();
      $table->enum('status', Invoice::$status)->default('awaiting_approval');
      $table->float('additional_discount', 22, 2)->default('0');
      $table->float('additional_price', 22, 2)->default('0');
      $table->float('tax', 22, 2)->default('0');

      $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('invoices');
  }
}
