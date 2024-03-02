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
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            //title part
            $table->string('title')->nullable();
            $table->string('home_title')->nullable();
            $table->string('faq_title')->nullable();
            $table->string('services_title')->nullable();
            $table->string('about_title')->nullable();
            $table->string('search_title')->nullable();
            $table->string('services_title_one')->nullable();
            $table->string('services_title_two')->nullable();
            $table->string('basic_title_one')->nullable();
            $table->string('basic_title_two')->nullable();
            $table->string('basic_title_three')->nullable();
            $table->string('basic_title_four')->nullable();
            $table->string('basic_title_five')->nullable();

            // app images part 
            $table->string('logo')->nullable();
            $table->string('secondary_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_animation_image')->nullable();
            $table->string('map_image')->nullable();
            $table->string('footer_image')->nullable();
            $table->string('footer_animation_image')->nullable();

            // links part
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('threads')->nullable();
            $table->string('instagram')->nullable();
            $table->text('map_url')->nullable();

            // important credentials
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('email')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_settings');
    }
};