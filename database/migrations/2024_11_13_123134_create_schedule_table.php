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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();  
            $table->date('SCHEDULE_DATE');  
            $table->string('FIRST_NAME');  
            $table->string('LAST_NAME');  
            $table->enum('TRANSACTION_TYPE', ['Inventory', 'Service']);  
            $table->enum('PRODUCT_TYPE', ['Rice', 'Mais', 'Pinlid', 'Darak']);  
            $table->boolean('STATUS')->default(false);  
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
