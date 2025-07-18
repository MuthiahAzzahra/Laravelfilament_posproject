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
            $table->string('name');
            $table->string('email')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('total_price');
            $table->text('note')->nullable();
            $table->string('payment_method_id')
                ->nullable()
                ->constrained('payment_methods', 'id')
                ->nullOnDelete();
            $table->integer('paid_amount')->nullable();
            $table->integer('change_amount')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('price_after_tax')->nullable();
            $table->integer('tax_percentage')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
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