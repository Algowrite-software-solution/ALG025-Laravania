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
        Schema::create('job_cards', function (Blueprint $table) {
            $table->id();
            $table->string('checking_price');

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('job_card_status_id')->constrained()->cascadeOnDelete();
            //cus_problem_id
            $table->foreignId('cus_problem_id')->constrained()->cascadeOnDelete();
            //device_id
            $table->foreignId('device_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_cards');
    }
};
