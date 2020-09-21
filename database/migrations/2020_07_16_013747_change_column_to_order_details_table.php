<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnToOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->string('id',15)->change();
            $table->string('order_id',15)->change();
            $table->string('order_number',15)->change();
            $table->bigInteger('vendor_id')->change();
            $table->string('product_id',15)->change();
            $table->renameColumn('sku_id', 'product_varient_id');
            $table->string('product_varient_id', 15)->change();
            $table->integer('order_status')->comment('1=cancel,2=on hold,3=pending,4=processing,5=complete')->change();

            $table->float('regular_price', 10,2)->after('price');
            $table->float('vat', 10,2)->after('regular_price');
            $table->float('delivery_charge', 10,2)->after('regular_price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->renameColumn('product_varient_id', 'sku_id');
            $table->dropColumn('regular_price');
            $table->dropColumn('vat');
            $table->dropColumn('delivery_charge');
        });
    }
}
