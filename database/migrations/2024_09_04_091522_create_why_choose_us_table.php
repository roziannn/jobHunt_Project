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
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('icon_one')->nullable();
            $table->string('title_one')->nullable();
            $table->string('subtitle_one')->nullable();

            $table->string('icon_two')->nullable();
            $table->string('title_two')->nullable();
            $table->string('subtitle_two')->nullable();

            $table->string('icon_three')->nullable();
            $table->string('title_three')->nullable();
            $table->string('subtitle_three')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};
