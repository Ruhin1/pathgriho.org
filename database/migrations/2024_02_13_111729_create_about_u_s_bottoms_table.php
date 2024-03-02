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
        Schema::create('about_u_s_bottoms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('des');
            $table->string('btntext');
            $table->string('btnurl');
            $table->text('iframe');
            $table->string('bticon');
            $table->string('bttext');
            $table->text('btdes');
            $table->string('btbtntxt');
            $table->string('btbtnurl');
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
        Schema::dropIfExists('about_u_s_bottoms');
    }
};
