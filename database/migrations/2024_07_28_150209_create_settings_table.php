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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('camp_name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address');
            $table->string('prefix');
            $table->string('logo');
            $table->string('favicon')->nullable();
            $table->string('bill_logo');
            $table->string('letter_head')->nullable();
            $table->string('terms')->nullable();
            $table->string('footer_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
