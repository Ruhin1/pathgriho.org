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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->text('description')->nullable();
            $table->string('image');
            $table->text('images')->nullable();
            $table->text('video_iframe')->nullable();
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->enum('type', ['primary', 'secondary', 'normal']);
            $table->tinyText('tags')->nullable();
            $table->bigInteger('serial')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};