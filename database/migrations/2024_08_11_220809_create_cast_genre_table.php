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
        Schema::create('cast_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cast_id');
            $table->unsignedBigInteger('genre_id');
            // $table->primary(['cast_id', 'genre_id']);

            $table->foreign('cast_id')->references('id')->on('casts');
            $table->foreign('genre_id')->references('id')->on('genres');
            //この二つの重複を避ける
            //$table->unique(['cast_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cast_genre');
    }
};
