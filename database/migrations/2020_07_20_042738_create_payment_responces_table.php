<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentResponcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_responces', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('order_id',15);
            $table->string('status')->nullable();
            $table->dateTime('tran_date')->nullable();
            $table->string('tran_id',30)->nullable();
            $table->string('val_id',50)->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->decimal('store_amount',10,2)->nullable();
            $table->string('currency',5)->nullable();
            $table->string('bank_tran_id')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_no')->nullable();
            $table->string('card_issuer')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_issuer_country',50)->nullable();
            $table->string('card_issuer_country_code',5)->nullable();
            $table->string('currency_type',5)->nullable();
            $table->decimal('currency_amount',10,2)->nullable();
            $table->decimal('currency_rate',10,2)->nullable();
            $table->decimal('base_fair',10,2)->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_responces');
    }
}
