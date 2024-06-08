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
        Schema::create('shifts', function (Blueprint $table) {
        
            $table->id();
            $table->string('shift_name')->nullable(false)->default('template 1');
            $table->date('shift_date')->nullable(false)->default(now());
            $table->time('start_time')->nullable(false)->default(now());
            $table->time('end_time')->nullable(false)->default(now());
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
