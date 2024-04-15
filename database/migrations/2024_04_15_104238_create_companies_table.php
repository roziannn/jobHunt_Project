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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();

            $table->foreignId('industry_type_id')->nullable();
            $table->foreignId('organization_type_id')->nullable();
            $table->foreignId('team_size_id')->nullable();

            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->date('establishment_date')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('bio')->nullable();
            $table->text('vision')->nullable();
            $table->integer('total_views')->default(0);
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->text('map_link')->nullable();
            $table->boolean('is_profile_verified')->default('0');
            $table->timestamp('document_verified_at')->nullable();
            $table->boolean('profile_completion')->default('0');
            $table->boolean('visibility')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
