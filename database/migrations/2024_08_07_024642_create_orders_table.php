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
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('plan_id');
            $table->string('package_name');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('payment_provider');
            $table->double('amount');
            $table->string('paid_in_currency'); // currency name
            $table->string('default_amount'); // main amount based on currency.
            $table->enum('payment_status', ['paid', 'unpaid']); // main amount based on currency.

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
