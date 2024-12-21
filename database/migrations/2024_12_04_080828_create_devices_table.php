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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->nullable();
            //device_type_id
            $table->foreignId('device_type_id')->constrained()->onDelete('cascade');
            //color_id
            $table->foreignId('color_id')->constrained()->onDelete('cascade');
            //device_model_id
            $table->foreignId('device_model_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
