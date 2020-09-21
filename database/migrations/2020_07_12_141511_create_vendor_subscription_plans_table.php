<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title','100');
            $table->float('price',10,2);
            $table->integer('duration');
            $table->integer('product_limitation')->nullable();
            $table->string('description',200)->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('vendor_subscription_plans');
    }
}
