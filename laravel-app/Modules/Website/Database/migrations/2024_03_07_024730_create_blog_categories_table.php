<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 500);
            $table->string('description', 5000)->nullable();
            $table->string('slug', 500);
        });
    }

    public function down()
    {
        Schema::drop('blog_categories');
    }
}
