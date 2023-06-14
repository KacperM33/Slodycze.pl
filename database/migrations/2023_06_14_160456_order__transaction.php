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
        Schema::create('order_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('transaction_id');
            $table->primary(['order_id', 'transaction_id']);
        });

        Schema::table('order_transaction', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_transaction');
        // Schema::table('order_transaction', function (Blueprint $table) {
        //     $table->dropForeign('transactions_transaction_id_foreign');
        //     $table->dropForeign('transactions_order_id_foreign');
        //     $table->dropColumn('transaction_id');
        //     $table->dropColumn('order_id');
        // });
    }
};
