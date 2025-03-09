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
        Schema::create('teacher_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->foreignId('subject_id')->references('id')->on('subjects')->cascadeOnDelete();
            $table->foreignId('study_class_id')->references('id')->on('study_classes')->cascadeOnDelete();
            $table->foreignId('student_level_id')->references("id")->on("student_levels")->cascadeOnDelete();
            $table->foreignId('study_time_id')->references('id')->on('study_times')->cascadeOnDelete();
            $table->string('day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_schedules');
    }
};