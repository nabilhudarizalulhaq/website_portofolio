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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul proyek
            $table->text('description')->nullable(); // Deskripsi proyek
            $table->string('image')->nullable(); // Path gambar / thumbnail
            $table->string('link')->nullable(); // Link demo atau GitHub
            $table->string('tech_stack')->nullable(); // Teknologi yang dipakai (Laravel, React, Flutter, dsb)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
