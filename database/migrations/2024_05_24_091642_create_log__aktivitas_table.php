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
        Schema::create('log__aktivitas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tipe_log');
            $table->uuid('log_id');
            $table->string('tindakan');
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log__aktivitas');
    }
};
