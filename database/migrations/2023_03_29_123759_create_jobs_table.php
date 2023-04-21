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
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('job_title', 50);
            $table->string('company_name', 50);
            $table->string('city', 20);
            $table->enum('experience', ['Junior', 'Senior', 'Fresh Graduate']);
            $table->enum('type', ['Fulltime', 'Part Time', 'Internship']);
            $table->string('skills');
            $table->enum('work_location', ['Remote', 'Office', 'Hybrid']);
            $table->integer('salary');
            $table->text('company_background');
            $table->text('whyhiring');
            $table->text('job_description');
            $table->text('responsibilities');
            $table->string('foto');
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