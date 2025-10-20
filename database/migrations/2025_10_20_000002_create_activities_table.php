<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('Path gambar aktivitas');
            $table->text('description')->comment('Deskripsi aktivitas/lowongan kerja');
            $table->boolean('is_job_vacancy')->default(false)->comment('True jika ini lowongan kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};