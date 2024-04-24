<?php

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
    Schema::create('binding_directions', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->softDeletes();
      $table->string('name', 255);
      $table->string('code', 255)->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('binding_directions');
  }
};
