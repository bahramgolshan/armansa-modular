<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTagsTable extends Migration
{

    public function up()
    {
        Schema::create('blog_post_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_post_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('blog_post_tags');
    }
}
