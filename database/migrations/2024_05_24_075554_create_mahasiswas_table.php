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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('npm',20)->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_hp',14);
            // $table->foreignUuid('departement_id')->constrained('departemens');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin',1);
            $table->text('alamat');
            $table->string('status',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
