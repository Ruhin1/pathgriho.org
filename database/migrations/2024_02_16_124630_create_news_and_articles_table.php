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
        Schema::create('news_and_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('short_description');
            $table->string('description')->nullable();
            $table->string('slug')->unique();
            $table->integer('serial')->nullable();
            $table->enum('type', ['featured', 'normal']);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_and_articles');
    }
};