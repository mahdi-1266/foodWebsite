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
        Schema::create('top_offers', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('food-category')->nullable();
            $table->string('menu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_offers');
    }
};
