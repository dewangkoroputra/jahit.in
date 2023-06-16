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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('pre_order_id');
            $table->unsignedBigInteger('user_id');
            $table->string('bank')->nullable();
            $table->enum('status', ['WAITING', 'PROCESS', 'REJECT', 'SUCCESS'])->default('WAITING'); 
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('pre_order_id')->references('id')->on('pre_order');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
