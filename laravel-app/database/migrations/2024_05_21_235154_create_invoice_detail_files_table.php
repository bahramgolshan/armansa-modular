<?php

use App\Models\InvoiceDetailFile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('invoice_detail_files', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('invoice_detail_id')->unsigned();
      $table->string('original_name', 100);
      $table->string('file_name', 500);
      $table->string('extension', 10);
      $table->enum('type', InvoiceDetailFile::$types);
      $table->timestamps();

      $table->foreign('invoice_detail_id')->references('id')->on('invoice_details')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('invoice_detail_files');
  }
};
