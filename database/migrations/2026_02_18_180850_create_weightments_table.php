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
        Schema::create('weightments', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('gate_pass_no')->nullable();
            $table->string('description')->nullable();
            $table->decimal('ist_weight', 20, 2)->nullable();
            $table->decimal('second_weight', 20, 2)->nullable();
            $table->decimal('net_weight', 20, 2)->nullable();
            $table->string('ist_time')->nullable();
            $table->string('second_time')->nullable();
            $table->string('ist_date')->nullable();
            $table->string('second_date')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weightments');
    }
};
