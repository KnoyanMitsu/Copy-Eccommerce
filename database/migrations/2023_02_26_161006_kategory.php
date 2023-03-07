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
        // Schema::create('comment', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('nama_id')->unsigned()->index();
        //     $table->string('comment',1000);
        //     $table->string('bintang');
        //     $table->timestamps();
        // });


        // Schema::create('produk', function (Blueprint $table) {
        //         $table->id();
        //         $table->bigInteger('users_id')->unsigned()->index();
        //         $table->string('judul');
        //         $table->string('kategory');
        //         $table->string('deskripsi');
        //         $table->string('harga');
        //         $table->string('stok');
        //         $table->foreign('users_id')->references('id')->on('users')
        //         ->onDelete('cascade')->onUpdate('cascade');

        //     });


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
