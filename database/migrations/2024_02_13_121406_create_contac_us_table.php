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
        Schema::create('contac_us', function (Blueprint $table) {
            $table->id();
            $table->string('mtitle')->nullable();
            $table->text('mdes')->nullable();
            $table->string('gmtitle')->nullable();
            $table->text('gmiframe')->nullable();
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
        Schema::dropIfExists('contac_us');
    }
};
