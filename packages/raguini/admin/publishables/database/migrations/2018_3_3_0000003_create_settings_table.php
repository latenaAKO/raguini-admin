<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {
    public function up() {
        Schema::create('settings', function(Blueprint $table) {
            $table->increments();
            $table->timestamps();
            $table->string('key')->unique();
            $table->string('name');
            $table->text('value');
            $table->text('description')->nullable();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('settings');
    }
}