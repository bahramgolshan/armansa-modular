<?php

use App\Models\Media;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{

  public function up()
  {
    Schema::create('media', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('original_name', 100);
      $table->string('file_name', 500);
      $table->string('extension', 10);
      $table->enum('type', Media::$types);
    });
  }

  public function down()
  {
    Schema::drop('media');
  }
}
