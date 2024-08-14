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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('job_category_id')->constrained('job_categories')->onDelete('cascade');
            $table->foreignId('job_role_id');
            $table->foreignId('job_experience_id');
            $table->foreignId('job_education_id');
            $table->foreignId('job_type_id');
            $table->foreignId('salary_type_id');

            $table->string('title');
            $table->string('slug');
            $table->string('vacancies');
            $table->double('min_salary');
            $table->double('max_salary');
            $table->date('deadline');
            $table->text('description');
            $table->enum('status', ['pending', 'active', 'expired']);
            $table->enum('apply_on', ['app', 'email', 'custom_url']);
            $table->string('apply_email')->nullable();
            $table->text('apply_url')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('highlight')->default(0);
            $table->date('featured_until')->nullable;
            $table->date('highlight_until')->nullable;
            $table->integer('total_views')->default(0);

            $table->foreignId('city_id');
            $table->foreignId('state_id');
            $table->foreignId('country_id');
            $table->enum('salary_mode', ['range', 'custom']);
            $table->string('company_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
