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
        Schema::create('petugas_pasars', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50);
            $table->string('pasar_id', 50);
            $table->string('alamat', 50);
            $table->string('no_telp', 15);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas_pasars');
    }
};
