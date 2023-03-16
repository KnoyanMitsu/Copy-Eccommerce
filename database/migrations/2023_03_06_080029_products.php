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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->fullText(['judul','deskripsi']);
            $table->bigInteger('users_id')->unsigned()->index()->nullable();
            $table->string('judul');
            $table->enum('kategory',['pakaian','accessoris','elektronik','sepatu','tas']);
            $table->longText('deskripsi');
            $table->integer('harga');
            $table->string('image');
            $table->string('stok');
            $table->foreign('users_id')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
