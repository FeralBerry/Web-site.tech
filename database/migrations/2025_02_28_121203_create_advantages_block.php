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
        Schema::create('advantages_block', function (Blueprint $table) {
            $table->id();
            $table->string('tab_icon',100)->nullable();
            $table->string('title_eng',200)->nullable();
            $table->string('title_ru',200)->nullable();
            $table->text('description_eng')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('link')->nullable()->default('');
            $table->string('link_title_eng',100)->nullable();
            $table->string('link_title_ru',100)->nullable();
            $table->string('link_button_text_eng',100)->nullable()->default('Learn more');
            $table->string('link_button_text_ru',100)->nullable()->default('Подробнее');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advantages_block');
    }
};
