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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('npm', 30)->unique();
            $table->string('nama_mahasiswa');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->enum('jk',['L', 'P']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
