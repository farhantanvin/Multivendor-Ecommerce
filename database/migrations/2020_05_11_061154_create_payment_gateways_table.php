<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('key_id')->nullable();
            $table->string('secret_token')->nullable();
            $table->string('info_text')->nullable();
            $table->boolean('sandbox')->comment('0=Inactive,1=active')->nullable();
            $table->string('email',50)->nullable();
            $table->string('website')->nullable();
            $table->string('retail')->nullable();
            $table->string('publisher_key')->nullable();
            $table->float('commission',10,2)->nullable();
            $table->boolean('commission_type')->comment('0=Include,1=Exclude')->nullable();
            $table->boolean('status')->comment('0=Inactive,1=active');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('payment_gateways');
    }
}
