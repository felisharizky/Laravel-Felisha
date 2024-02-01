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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('nisn', 10);
            $table->string('nis', 10);
            $table->string('nama', 35);
            $table->foreignId('id_kelas', 11);
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->foreignId('id_spp', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
