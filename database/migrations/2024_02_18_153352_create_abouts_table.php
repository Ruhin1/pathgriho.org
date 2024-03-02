<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('title');
            $table->text('description');
            $table->string('mission_title');
            $table->text('mission_description');
            $table->string('vision_title');
            $table->text('vision_description');
            $table->string('about_title')->nullable();
            $table->text('about_description')->nullable();
            $table->string('story_title')->nullable();
            $table->text('story_description')->nullable();
            $table->string('video_title')->nullable();
            $table->text('video_description')->nullable();
            $table->text('video_iframe')->nullable();
            $table->text('btn_title')->nullable();
            $table->text('btn_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};