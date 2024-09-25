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
        Schema::create('daftar_ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_asal', 12);
            $table->string('jenjang_asal', 30)->nullable();
            $table->string('nama', 25)->nullable();
            $table->string('nis', 16)->unique();
            $table->string('nik', 16)->unique();
            $table->string('phone', 16)->nullable();
            $table->string('email', 64)->unique();
            $table->string('status', 1)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_ppdb');
    }
};
