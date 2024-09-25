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
        Schema::create('metode_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->string('icon', 30);
            $table->string('description', 210);
            $table->string('status', 1);
            $table->unsignedBigInteger('user_created')->nullable();
            $table->foreign('user_created')->references('id')->on('users');
            $table->unsignedBigInteger('user_updated')->nullable();
            $table->foreign('user_updated')->references('id')->on('users');
            $table->unsignedBigInteger('user_deleted')->nullable();
            $table->foreign('user_deleted')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembelajaran');
    }
};
