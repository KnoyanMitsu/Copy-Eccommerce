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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_id')->unsigned()->index();
            $table->string('comment',1000);
            $table->string('bintang');
            $table->timestamps();
        });

        Schema::create('kategori', function (Blueprint $table){
            $table->id();
            $table->string('nama kategori');
            });

        Schema::create('produk', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('name_id')->unsigned()->index();
                $table->bigInteger('kategori_id')->unsigned()->index();
                $table->string('judul');
                $table->string('deskripsi');
                $table->string('harga');
                $table->string('bintang');
                $table->string('stok');
                $table->foreign('name_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('kategori_id')->references('id')->on('kategori')
                ->onDelete('cascade')->onUpdate('cascade');

            });


        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
        Schema::dropIfExists('comment');
        Schema::dropIfExists('kategori');
    }
};
