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
        Schema::create('shop_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('genre_id');
            // $table->primary(['shop_id', 'genre_id']);

            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('genre_id')->references('id')->on('genres');
            //この二つの重複を避ける
           // $table->unique(['shop_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_genre');
    }
};
