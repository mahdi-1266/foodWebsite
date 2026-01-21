<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('all_food_menus', function (Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->string('slug')->nullable();
      $table->string('description')->nullable();
      $table->string('price')->nullable();
      $table->string('photo')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('all_food_menus');
  }
};
