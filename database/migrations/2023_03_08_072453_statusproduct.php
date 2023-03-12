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
        Schema::create('statuspengiriman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned()->index();
            $table->bigInteger('product_id')->unsigned()->index();
            $table->string('quantity');
            $table->string('total');
            $table->enum('status', ['belum selesai','selesai']);
            $table->foreign('users_id')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuspengiriman');
    }
};
