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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
           
            $table->string('sub_total');
            $table->string('cus_mobile');
            $table->string('cus_first_name');
            $table->string('cus_last_name');
            $table->string('cus_email');
            $table->integer('cus_id');
            $table->integer('job_card_id')->nullable();
            $table->integer('employee_id');
            $table->string('employee_name');
            $table->integer('seller_id');
            $table->string('seller_name');
            $table->string('total');
            $table->string('model')->nullable();
            $table->string('device_type');
            $table->string('serial_number')->nullable();

            $table->string('toatl_discount');
            $table->longText('special_notice')->nullable();


            $table->timestamps();

            $table->foreignId('invoice_status_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
