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
            $table->string('name');
            $table->text('description');
            $table->enum('evaluation', [0, 1, 2, 3, 4, 5])->default(0);
            $table->integer('quantity');
            $table->double('price');
            $table->double('old_price');
            $table->double('total');
            $table->foreignId('category_id')->on('categories')->delete('cascad');
            $table->foreignId('user_id')->on('users')->delete('cascad');
            $table->timestamps();
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
