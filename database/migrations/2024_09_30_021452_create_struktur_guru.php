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
        Schema::create('struktur_guru', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('department', 128);
            $table->string('unit', 64);
            $table->string('image', 64);
            $table->string('fb', 64)->nullable();
            $table->string('x', 64)->nullable();
            $table->string('ink', 64)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_guru');
    }
};
