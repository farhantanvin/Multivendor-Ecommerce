<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_to_users', function (Blueprint $table) {
            $table->id();
            $table->integer('discount_id');
            $table->integer('user_id');
            $table->tinyInteger('coupon_used')->default(0)->comment('1 = Used, 0 = Not Used');
            $table->tinyInteger('coupon_used_times')->default(0);
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
        Schema::dropIfExists('discount_to_users');
    }
}
