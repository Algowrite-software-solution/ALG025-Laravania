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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
           
            $table->string('quantity');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('capacity')->nullable();
            $table->string('item_price');
            $table->string('item_name');
            //disccount,model,brand.condition,warrenty,stock_code(nullable,string)
            $table->string('discount')->nullable();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->string('condition')->nullable();
            $table->string('warrenty')->nullable();
            $table->string('stock_code')->nullable();
            $table->string('line_total');

            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
