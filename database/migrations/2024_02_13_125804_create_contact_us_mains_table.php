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
        Schema::create('contact_us_mains', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sdes');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('furl');
            $table->string('turl');
            $table->string('yurl');
            $table->string('iurl');
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
        Schema::dropIfExists('contact_us_mains');
    }
};
