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
        Schema::create('accessory_models', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->longText('description')->nullable();
            $table->foreignId('accessory_id')->constrained()->cascadeOnDelete();
            //brand_id
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessory_models');
    }
};
