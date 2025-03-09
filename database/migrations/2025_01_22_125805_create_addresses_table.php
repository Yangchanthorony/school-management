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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('village')->nullable();
            $table->string('commune');
            $table->string('district');
            $table->string('province');
            $table->string('current_address')->nullable();

            // Polymorphic fields
            $table->unsignedBigInteger('addressable_id'); // ID of related model
            $table->string('addressable_type');          // Type of related model (morph type)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
