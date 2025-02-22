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
        Schema::create('dummy', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->string('name'); // Creates a VARCHAR column for name
            $table->integer('age'); // Creates an INT column for age
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dummy');
    }
};
