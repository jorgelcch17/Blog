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
            $table->String('name');
            $table->String('slug');

            $table->text('extract')->nullable();
            $table->longText('body')->nullable();

            $table->enum('status', [1,2])->default(1);

            $table->foreignId('user_id')->references('id')->on('users')->ondelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->ondelete('cascade');
            
            $table->timestamps();
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
