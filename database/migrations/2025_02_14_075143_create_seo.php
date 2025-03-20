<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('title',50)->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('robots',20)->nullable();
            $table->text('image_url')->nullable();
            $table->integer('image_height')->nullable();
            $table->integer('image_width')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('seo');
    }
};
