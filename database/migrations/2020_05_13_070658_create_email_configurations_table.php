<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('configuration_name',30);
            $table->string('mail_engine',30);
            $table->string('mail_host',100);
            $table->string('mail_port',10);
            $table->string('encryption',20);
            $table->string('username',30);
            $table->string('password',50);
            $table->string('from_email',50);
            $table->string('from_name',30);
            $table->boolean('status')->comment('0=Inactive,1=active');
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
        Schema::dropIfExists('email_configurations');
    }
}
