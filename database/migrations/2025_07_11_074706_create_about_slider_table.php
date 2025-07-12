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
        Schema::create('about_slider', function (Blueprint $table) {
            $table->id();
            $table->string('img',255)->nullable(false);
            $table->string('alt_img',255)->nullable();
            $table->string('title_ru',255)->nullable();
            $table->string('title_eng',255)->nullable();
            $table->text('slider_p_ru')->nullable();
            $table->text('slider_p_eng')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_slider');
    }
};
