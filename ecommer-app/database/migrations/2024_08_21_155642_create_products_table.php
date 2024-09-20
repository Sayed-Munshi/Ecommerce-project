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
            $table->string('slug');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('purchase_price');
            $table->enum('discount_type', ['fixed', 'percentage'])->nullable();
            $table->integer('discount_amount')->nullable();
            $table->integer('sell_price');
            $table->integer('calculation_price')->nullable();
            $table->longText('description');
            $table->longText('additional_description');
            $table->string('thumbnail_image');
            $table->foreignId('vendor_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
