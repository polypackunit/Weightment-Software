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
        Schema::create('weight_readings', function (Blueprint $table) {
            $table->id();
            $table->decimal('weight', 10, 2);
            $table->string('vehicle_no')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('gate_pass_no')->nullable();
            $table->text('description')->nullable();
            $table->enum('reading_type', ['first', 'second'])->default('first');
            $table->timestamp('reading_time')->useCurrent();
            $table->timestamps();
            $table->index('reading_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_readings');
    }
};
