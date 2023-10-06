<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("blog_title");
            $table->string("blog_slug")->unique();
            $table->string("blog_author")->nullable();
            $table->text("blog_short_description");
            $table->text("blog_description")->nullable();
            $table->string("blog_image_path");
            $table->tinyInteger("is_external_link")->default(0);
            $table->string("blog_link")->nullable();
            $table->tinyInteger("blog_is_active")->default(1);
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
        Schema::dropIfExists('blogs');
    }
}
