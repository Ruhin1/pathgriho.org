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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('secondary_title');
            $table->text('secondary_description');
            $table->string('image');
            $table->string('photos');
            $table->string('bg_image')->nullable();
            $table->text('short_description');
            $table->string('banner_title');
            $table->text('banner_description')->nullable();
            $table->string('volunteers');
            $table->string('volunteer_title')->nullable();
            $table->string('btn_title');
            $table->string('btn_link')->nullable();
            $table->string('primary_btn_title');
            $table->tinyText('primary_btn_link')->nullable();
            $table->string('secondary_btn_title')->nullable();
            $table->tinyText('secondary_btn_link')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};