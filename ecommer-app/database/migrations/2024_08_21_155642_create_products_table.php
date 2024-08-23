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
            $table->integer('user_id');
            $table->string('product_name');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('purchase_price');
            $table->enum('discount_type', ['fixed', 'percentage'])->nullable();
            $table->integer('discount_amount')->nullable();
            $table->integer('sell_price');
            $table->longText('description');
            $table->longText('additional_description');
            $table->string('thumbnail_image');
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
