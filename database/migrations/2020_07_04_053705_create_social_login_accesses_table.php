<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_login_accesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('platform_name');
            $table->string('client_id');
            $table->string('client_secret');
            $table->string('redirect_url');
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
        Schema::dropIfExists('social_login_accesses');
    }
}
