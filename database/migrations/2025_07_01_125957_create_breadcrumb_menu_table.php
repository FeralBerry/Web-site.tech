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
        Schema::create('breadcrumb_menu', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru',100)->nullable();
            $table->string('title_eng',100)->nullable();
            $table->integer('breadcrumb_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breadcrumb_menu');
    }
};
