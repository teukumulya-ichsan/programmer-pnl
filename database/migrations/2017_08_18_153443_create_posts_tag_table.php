<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts_tag', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('posts_id')->unsigned();
          $table->foreign('posts_id')->references('id')->on('posts')
                ->onDelete('cascade');
          $table->integer('tag_id')->unsigned();
          $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tag');
    }
}
