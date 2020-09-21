<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id')->nullable();
            $table->tinyInteger('discount_by')->default(1)->comment('1 = Admin, 2 = Vendor');
            $table->string('name',250);
            $table->string('description',1000);
            $table->string('coupon_type',25);
            $table->float('amount');
            $table->integer('validity_times');
            $table->dateTime('start_date', 0)->nullable();
            $table->dateTime('expired_date', 0)->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('discounts');
    }
}
