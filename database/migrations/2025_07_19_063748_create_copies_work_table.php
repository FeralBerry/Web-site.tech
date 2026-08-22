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
        Schema::create('copies_work', function (Blueprint $table) {
            $table->id();
            $table->string('img',255)->nullable(false);
            $table->string('alt_img',100)->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_eng')->nullable();
            $table->string('title_ru',150)->nullable();
            $table->string('title_eng',150)->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies_work');
    }
};
