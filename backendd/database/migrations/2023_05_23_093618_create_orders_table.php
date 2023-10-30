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
            $table->foreignId('productId');
            $table->string('size');
            $table->string('customer_name');
            $table->string('customer_country');
            $table->string('customer_city');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->string('customer_postal_code');
            $table->string('customer_note');
            $table->decimal('total_amount', 8, 2);
            $table->string('status');
            $table->date('date_order');

            $table->foreign('productId')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
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
