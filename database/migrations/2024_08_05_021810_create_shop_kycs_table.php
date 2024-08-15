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
        Schema::create('shop_kycs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade');
            $table->string('ceo_name');
            $table->string('ceo_telephone');
            $table->string('license_name');
            $table->string('license_telephone');
            $table->string('license_adress');
            $table->string('license_img01');
            $table->string('license_img02');
            $table->string('license_img03');
            $table->string('license_img04');
            $table->boolean('status');
            $table->boolean('is_approved')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_kycs');
    }
};
