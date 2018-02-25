<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
    public function up() {
        Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('author_id');
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->string('slug');
            $table->text('excerpt')->nullable();
            $table->text('body');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('featured')->default(false);
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('posts');
    }
}