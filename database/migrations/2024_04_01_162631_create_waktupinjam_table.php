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
        Schema::create('waktupinjam', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruangan_id')->nullable()->index();
            $table->string('nama');
            $table->dateTime('lama_pinjam');
            $table->string('harga_ruangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktupinjam');
    }
};
