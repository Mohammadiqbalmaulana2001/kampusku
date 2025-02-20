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
        Schema::create('registrasi__kursuses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->foreignUuid('mahasiswa_id')->constrained('mahasiswas');
            // $table->foreignUuid('kursus_id')->constrained('kursuses');
            $table->string('semester');
            $table->char('tingkat', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi__kursuses');
    }
};
