<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('id',15)->change();
            $table->string('order_number',15)->change();
            $table->integer('order_status')->comment('1=cancel,2=on hold,3=pending,4=processing,5=complete')->change();
            $table->integer('currency')->nullable()->change();
            $table->float('currency_value')->nullable()->change();
            $table->float('order_shipping')->nullable()->change();
            $table->float('delivery_charge',10,2)->nullable()->after('order_tracking_number');
            $table->float('discount',10,2)->nullable()->after('delivery_charge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('delivery_charge');
            $table->dropColumn('discount');
        });
    }
}
