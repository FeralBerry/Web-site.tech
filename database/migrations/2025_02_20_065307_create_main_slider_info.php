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
        Schema::create('main_slider', function (Blueprint $table) {
            $table->id();
            $table->text('img')->nullable();
            $table->string('alt_img',100)->nullable();
            $table->text('slider_title_ru')->nullable();
            $table->text('slider_title_eng')->nullable();
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
        Schema::dropIfExists('main_slider');
    }
};
