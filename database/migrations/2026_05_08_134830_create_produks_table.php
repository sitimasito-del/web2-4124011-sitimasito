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
    Schema::create('produks', function (Blueprint $table) {
        $table->id(); // id
        $table->string('nama'); // nama
        $table->decimal('harga', 15, 2); // decimal(harga,15,2)
        $table->integer('stok'); // integer(stok)
        $table->string('kategori')->nullable(); // string(kategori)->nullable()
        $table->boolean('aktif')->default(true); // boolean(aktif)->default(true)
        $table->timestamps(); // timestamps()
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
