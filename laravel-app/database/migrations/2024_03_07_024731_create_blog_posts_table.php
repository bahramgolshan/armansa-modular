<?php

use App\Models\BlogPost;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{

  public function up()
  {
    Schema::create('blog_posts', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('title', 1000);
      $table->longText('content');
      $table->string('meta_keyword', 1000)->nullable();
      $table->string('meta_description', 1000)->nullable();
      $table->unsignedInteger('blog_category_id');
      $table->integer('created_by')->unsigned();
      $table->string('summary', 1000)->nullable();
      $table->integer('updated_by')->unsigned()->nullable();
      $table->integer('media_id')->unsigned()->nullable();
      $table->string('slug', 1000);
      $table->enum('status', BlogPost::$status);
      $table->boolean('allow_comments')->default(true)->nullable();
      $table->boolean('is_featured')->default(false)->nullable();

      $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('restrict')->onUpdate('cascade');
      $table->foreign('media_id')->references('id')->on('media')->onDelete('restrict')->onUpdate('cascade');
    });
  }

  public function down()
  {
    Schema::drop('blog_posts');
  }
}
