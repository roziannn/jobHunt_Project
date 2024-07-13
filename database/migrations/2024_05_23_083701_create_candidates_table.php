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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('experience_id')->nullable();
            $table->foreignId('profession_id')->nullable();

            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('slug')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->text('website')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('email')->nullable();
            $table->text('cv')->nullable();
            $table->text('bio')->nullable();
            $table->enum('marital_status', ['married', 'single'])->nullable();
            $table->date('birth_date')->nullable();

            $table->string('address')->nullable();
            $table->foreignId('city')->nullable();
            $table->foreignId('state')->nullable();
            $table->foreignId('country')->nullable();

            $table->enum('status', ['available', 'not_available'])->nullable();
            $table->boolean('profile_complete')->default(0);
            $table->boolean('visibility')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
