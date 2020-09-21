<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('order_number',255);
            $table->bigInteger('customer_id');
            $table->integer('shipping_method');
            $table->integer('payment_method');
            $table->timestamp("order_date");
            $table->integer('order_status')->default(1)->comment('1=pending,2=processing,3=complete,4=on holod,5=cancel');
            $table->integer('currency');
            $table->float('currency_value');
            $table->float('order_shipping');
            $table->float('order_tax');
            $table->string('order_tracking_number',255);
            $table->float('subtotal');
            $table->float('total');
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('orders');
    }
}
