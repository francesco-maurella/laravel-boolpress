<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('author_id');
          $table->unsignedBigInteger('comments_id');
          $table->string('title', 50);
          $table->string('image', 255);
          $table->text('content');
          $table->timestamps();

          $table->foreign('author_id')
                ->references('id')
                ->on('authors');

          $table->foreign('comments_id')
                ->references('id')
                ->on('comments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
