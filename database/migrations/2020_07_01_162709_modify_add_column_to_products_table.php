<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAddColumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
//            modified column
            $table->string('id',15)->change();
            $table->string('product_name',90)->change();
            $table->text('product_image')->change();
            $table->mediumText('description')->change();
            $table->mediumText('specification')->change();
            $table->mediumText('policy')->change();
//            modified column

//            New Column
            $table->string('slug',95)->after('product_name')->nullable();
            $table->string('product_condition',5)->after('product_name')->nullable();
            $table->bigInteger('subcategory_id')->after('category_id')->nullable()->default(null);
            $table->boolean('stock_available')->after('quantity')->comment('0=always available,1=check stock')->nullable()->default(1);
            $table->text('short_description',300)->nullable()->after('vendor_id');
            $table->boolean('variable_product')->nullable()->after('stock_available')->comment('0=not variable,1=variable');
//            New Column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('product_condition');
            $table->dropColumn('subcategory_id');
            $table->dropColumn('stock_available');
            $table->dropColumn('short_description');
            $table->dropColumn('variable_product');
        });
    }
}
