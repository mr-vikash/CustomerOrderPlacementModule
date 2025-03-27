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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->enum('method_name', [
                'Credit Card',
                'Debit Card',
                'Net Banking',
                'UPI',
                'Wallet',
                'Cash on Delivery',
                'PayPal',
                'Google Pay',
                'Apple Pay',
                'Bank Transfer'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
$table->string('title')->unique();
            $table->text('description');
            $table->boolean('status')->default(1)->comment('0:inactive,1active');$table->string('title')->unique();
            $table->text('description');
            $table->boolean('status')->default(1)->comment('0:inactive,1active');