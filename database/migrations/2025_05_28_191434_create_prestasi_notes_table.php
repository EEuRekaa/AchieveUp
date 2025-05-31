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
        Schema::create('prestasi_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestasi_id')->constrained('prestasi')->onDelete('cascade');
            $table->foreignId('dosen_id')->constrained('dosen')->onDelete('cascade');
            $table->enum('status', ['disetujui', 'ditolak']);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_notes');
    }
};
