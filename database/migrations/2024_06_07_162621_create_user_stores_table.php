<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('user_stores', function (Blueprint $table) {
    //         $table->id();
    //         $table->integer('user_id', 100)->nullable(false);
    //         $table->integer('store_id', 100)->nullable(false);
    //         $table->timestamps();
    //     });
    // }

    public function up()
    {
        Schema::create('user_stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('store_id');


            $table->foreign('user_id')->references('id')
                 ->on('users');
            $table->foreign('store_id')->references('id')
                ->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_stores');
    }
};
