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
        Schema::create('some_examples_block', function (Blueprint $table) {
            $table->id();
            $table->string('thumb_img',100)->nullable();
            $table->string('slide_img',100)->nullable();
            $table->string('title_ru',100)->nullable();
            $table->string('title_eng',100)->nullable();
            $table->string('link',100)->nullable();
            $table->string('link_title_eng',100)->nullable();
            $table->string('link_title_ru',100)->nullable();
            $table->string('link_text_eng',100)->nullable();
            $table->string('link_text_ru',100)->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_eng')->nullable();
            $table->integer('small_img_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('some_examples_block');
    }
};
