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
        Schema::create(table: 'teachers', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'full_name');
            
            $table->string(column: 'latin_name');
            $table->enum(column: 'gender', allowed: [1, 2])->default(value: 1)->comment(comment: '1.Male | 2.Female');
            $table->enum(column: 'marital_status', allowed: [1, 2])->default(value: 1)->comment(comment: '1.Married | 2.Single');
            $table->string(column: 'dob')->nullable(); // ថ្ងៃខែឆ្នាំកំណើត
            $table->string(column: 'national_id')->nullable();
            
            $table->string(column: 'specialization'); // ឯកទេស
            $table->string(column: 'degree'); // កំរិតវប្បធម៌
            $table->string(column: 'university')->nullable(); // សាកលវិទ្យាល័យ
            $table->string(column: 'email')->unique(); // អាស័យដ្ឋាន Email
            $table->string(column: 'phone');
            $table->string(column: 'password')->nullable();
            $table->foreignId(column: 'created_by')->references(column: 'id')->on(table: 'admins')->onDelete(action: 'cascade');
            $table->string('hire_date')->nullable();
            $table->text(column: 'note')->nullable(); // តំណាក់ការសរសេរ
            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
