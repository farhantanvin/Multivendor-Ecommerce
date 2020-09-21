<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_setups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('option_name');
            $table->string('option_value');
            $table->tinyInteger('status')->default(1)->comment('1 = Active, 0 = Inactive');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => HomeSetupSeeder::class,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_setups');
    }
}
