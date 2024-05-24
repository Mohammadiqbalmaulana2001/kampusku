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
        Schema::create('jadwal__kuliahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->foreignUuid('kursus_id')->constrained('kursuses');
            // $table->foreignUuid('dosem_id')->constrained('dosens');
            $table->string('ruangan');
            $table->string('hari');
            $table->time('waktu_mulai');
            $table->time('waktu_akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal__kuliahs');
    }
};
