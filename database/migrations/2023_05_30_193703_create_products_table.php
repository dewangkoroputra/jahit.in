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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 100);
            $table->text("description");
            $table->decimal("price", 8, 2);
            $table->string("image", 100);
            $table->enum('category', ['WOMAN', 'MAN', 'CHILDREN']);
            $table->integer("rating");
            $table->string("location", 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
