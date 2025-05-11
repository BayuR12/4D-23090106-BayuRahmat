<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('order_id'); // FOREIGN KEY ke orders
            $table->unsignedBigInteger('product_id'); // FOREIGN KEY ke products
            $table->unsignedInteger('quantity')->default(1); // INTEGER UNSIGNED, DEFAULT 1
            $table->decimal('unit_price', 10, 2); // DECIMAL(10,2)
            $table->decimal('subtotal', 10, 2); // DECIMAL(10,2)
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            // Foreign key constraints
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
}
