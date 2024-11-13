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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('PRODUCT_NAME');
            $table->string('CUSTOMER_NAME');
            $table->integer('QUANTITY_PER_SACK');
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
        Schema::dropIfExists('inventory');
    }
};
