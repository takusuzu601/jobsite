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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('occupation');//業種
            $table->string('pref');
            $table->string('shop_city');
            $table->string('shop_main_area');
            $table->text('shop_area_discription');
            $table->string('shop_address');
            $table->text('shop_discription');
            $table->string('shop_phone');
            $table->string('shop_email');
            $table->string('shop_website')->nullable();
            $table->string('shop_instagram')->nullable();
            $table->string('shop_x')->nullable();
            $table->string('shop_line')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('thumbnail_min_image')->nullable();
            $table->text('google_map_embed_code')->nullable();
            $table->boolean('status');
            $table->boolean('is_approved')->default(0);
            $table->integer('shop_views')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
