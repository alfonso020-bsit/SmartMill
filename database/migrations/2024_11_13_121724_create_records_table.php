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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('CUSTOMER_NAME');
            $table->string('PRODUCT_NAME');
            $table->string('VARIETY')->nullable();
            $table->enum('TRANSACTION_TYPE', ['Service', 'Inventory']); 
            $table->integer('QUANTITY');
            $table->decimal('PRICE', 8, 2);
            $table->decimal('TOTAL_PRICE', 10, 2);
            $table->date('DATE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
