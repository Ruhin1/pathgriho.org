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
        Schema::create('s_b_page_banners', function (Blueprint $table) {
            $table->id();
            $table->string('bannertitle')->nullable();
            $table->text('bannerdescription')->nullable();
            $table->string('bannerbuttontext')->nullable();
            $table->string('bannerbuttonurl')->nullable();
            $table->string('bannerimage')->nullable();
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
        Schema::dropIfExists('s_b_page_banners');
    }
};
