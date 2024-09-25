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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('apps', 128);
            $table->string('icon', 64)->nullable();
            $table->text('maps')->nullable();
            $table->string('contact', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('tiktok', 128)->nullable();
            $table->string('facebook', 128)->nullable();
            $table->string('instagram', 128)->nullable();
            $table->string('youtube', 128)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('clock', 128)->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->unsignedBigInteger('user_create')->nullable();
            $table->foreign('user_create')->references('id')->on('users');
            $table->unsignedBigInteger('user_update')->nullable();
            $table->foreign('user_update')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
