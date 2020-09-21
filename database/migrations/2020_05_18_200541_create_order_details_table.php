<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigInteger('id')->primary();;
            $table->integer('order_id');
            $table->string('order_number',255);
            $table->integer('vendor_id');
            $table->integer('product_id');
            $table->integer('sku_id');
            $table->integer('quantity');
            $table->float('price');
            $table->float('discount');
            $table->float('total');
            $table->integer('order_status')->default(1)->comment('1=pending,2=processing,3=complete,4=on holod,5=cancel');
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
        Schema::dropIfExists('order_details');
    }
}
