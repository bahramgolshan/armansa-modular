<?php

use Modules\Website\App\Models\BlogComment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{

  public function up()
  {
    Schema::create('blog_comments', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->integer('blog_post_id')->unsigned();
      $table->enum('status', BlogComment::$status);
      $table->string('ip', 25)->nullable();
      $table->string('user_agent', 255)->nullable();

      $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('blog_comments');
  }
}
