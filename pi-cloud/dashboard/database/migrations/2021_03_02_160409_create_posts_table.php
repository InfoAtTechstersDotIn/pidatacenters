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
            $table->foreignId('user_id')->constrained();
            $table->integer('cat_id');
            $table->string('title');
            $table->string('thumb');
            $table->string('full_img');
            $table->text('detail');
            $table->string('tags');
            $table->integer('status');
            $table->string('metaTitle');
            $table->string('metaDesc')->nullable();
            $table->timestamps();

            //$table->foreignId('user_id')->constrained();
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
