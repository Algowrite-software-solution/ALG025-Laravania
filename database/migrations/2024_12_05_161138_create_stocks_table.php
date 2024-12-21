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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->bigInteger('stock_id')->unsigned();
            $table->foreignId('stock_status_id')->constrained()->cascadeOnDelete();
            //capacity_id,warranty_id,capacity_id
            $table->foreignId('capacity_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('warranty_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('size_id')->nullable()->constrained()->cascadeOnDelete();

            //accessory_model_id
            $table->foreignId('accessory_model_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('supplier_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('color_id')->nullable()->constrained()->cascadeOnDelete();

               


            

            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
