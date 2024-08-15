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
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade');
            $table->string('name');
            $table->string('pref');
            $table->string('age')->nullable();
            $table->string('size_t')->nullable();
            $table->string('size_b')->nullable();
            $table->string('size_cup')->nullable();
            $table->string('size_w')->nullable();
            $table->string('size_h')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('zodiac_sign')->nullable();
            $table->string('smoke')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('technique')->nullable();
            $table->string('erogenous_zones')->nullable();
            $table->string('show')->nullable();
            $table->boolean('status');
            $table->string('order')->nullable();
            $table->string('view')->nullable();
            $table->string('cast_instagram')->nullable();
            $table->string('cast_x')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casts');
    }
};
