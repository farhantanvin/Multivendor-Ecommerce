<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_to_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('module_id');
            $table->integer('role_id');
            $table->integer('activity_id');
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('module_to_roles');
    }
}
