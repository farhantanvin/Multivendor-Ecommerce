<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',30)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('available_stock')->nullable();
            $table->double('regular_price')->nullable();
            $table->double('sell_price')->nullable();
            $table->double('discount')->nullable();
            $table->double('vat')->nullable();
            $table->string('product_image',255)->nullable();
            $table->string('product_unit',30)->nullable();
            $table->string('product_type',30)->nullable();
            $table->boolean('product_offer')->nullable();
            $table->text('product_offer_reason')->nullable();
            $table->boolean('product_best_sale')->nullable();
            $table->text('product_best_sale_reason')->nullable();
            $table->integer('currency_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('vendor_id')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->string('facebook_link',100)->nullable();
            $table->string('youtube_link',100)->nullable();
            $table->string('product_code',30)->nullable();
            $table->float('delivery_charge')->nullable();
            $table->boolean('review_allowed')->nullable();
            $table->boolean('comment_allowed')->nullable();
            $table->boolean('set_as_featured')->nullable();
            $table->boolean('free_shipping')->nullable();
            $table->string('weight',30)->nullable();
            $table->text('policy')->nullable();
            $table->boolean('allowed_estimated_shipping_time')->nullable();
            $table->string('sku',50)->nullable();
            $table->float('tex_rate')->nullable();
            $table->string('model_number',40)->nullable();
            $table->integer('max_order_quantity')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->bigInteger('approved_by')->nullable();
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
        Schema::dropIfExists('products');
    }
}
