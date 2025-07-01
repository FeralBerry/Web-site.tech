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
        Schema::create('breadcrumb_menu_page', function (Blueprint $table) {
            $table->string('link',200)->nullable();
            $table->string('name_ru',100)->nullable();
            $table->string('name_eng',100)->nullable();
            $table->id();
            $table->integer('menu_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breadcrumb_menu_page');
    }
};
