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
    Schema::create('customers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('first_name', 100);
      $table->string('last_name', 100);
      $table->string('national_code', 15)->unique();
      $table->string('mobile', 15)->unique();
      $table->string('email', 150)->unique()->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->enum('gender', ['male', 'female']);
      $table->string('address');
      $table->integer('province_id');
      $table->integer('city_id');
      $table->integer('password');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('customers');
  }
};
