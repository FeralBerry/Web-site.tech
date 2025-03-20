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
        Schema::create('some_examples_small_img', function (Blueprint $table) {
            $table->id();
            $table->string('link',100)->nullable();
            $table->string('alt',100)->nullable();
            $table->integer('block_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('some_examples_small_img');
    }
};
