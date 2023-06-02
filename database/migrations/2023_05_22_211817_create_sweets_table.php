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
        Schema::create('sweets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('category', 40);
            $table->string('type', 40);
            $table->float('price');
            $table->float('quantity');
            $table->string('describe', 250);
            $table->date('exp-date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sweets');
    }
};
