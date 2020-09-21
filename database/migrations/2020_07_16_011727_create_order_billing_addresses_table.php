<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_billing_addresses', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('order_id');
            $table->bigInteger('customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact_no');
            $table->bigInteger('state_id');
            $table->bigInteger('country_id');
            $table->string('address');
            $table->string('customer_postal_code');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('order_billing_addresses');
    }
}
