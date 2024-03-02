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
        Schema::create('workout_sections', function (Blueprint $table) {
            $table->id();
            $table->string('first_heading');
            $table->string('first_title');
            $table->string('first_btn_title');
            $table->string('first_btn_link');
            $table->string('primary_btn_title');
            $table->string('primary_btn_link');
            $table->tinyText('main_heading');
            $table->string('secondary_btn_title');
            $table->string('secondary_btn_link');
            $table->string('first_workout_title');
            $table->string('first_workout');
            $table->string('second_workout_title')->nullable();
            $table->string('second_workout')->nullable();
            $table->string('third_workout_title')->nullable();
            $table->string('third_workout')->nullable();
            $table->string('article_title')->nullable();
            $table->string('article_heading');
            $table->string('bg_image')->nullable();
            $table->string('secondary_bg_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_sections');
    }
};