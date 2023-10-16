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
        Schema::create('employee_rewards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_ref_id')->nullable();
            $table->foreign('employee_ref_id')->references('Employee_id')->on('employees')->onDelete('cascade');
            $table->date('date_reward')->nullable();
            $table->integer('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_rewards');
    }
};
