<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditTable extends Migration {
    public function  up() {
        Schema::create('audits', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('checklist_id');
            $table->boolean('is_published');
        });
    }

    public function down() {
        Schema::dropIfExists('audits');
    }
}