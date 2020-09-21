<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTextHomePageBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_page_banners', function (Blueprint $table) {
            $table->text('text_first')->nullable()->after('title');
            $table->text('text_second')->nullable()->after('title');
            $table->text('text_third')->nullable()->after('title');
            $table->text('text_forth')->nullable()->after('title');
            $table->text('text_fifth')->nullable()->after('title');
            $table->text('button_text')->nullable()->after('title');
            $table->text('url')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_page_banners', function (Blueprint $table) {
            $table->dropColumn('text_first');
            $table->dropColumn('text_second');
            $table->dropColumn('text_third');
            $table->dropColumn('text_forth');
            $table->dropColumn('text_fifth');
            $table->dropColumn('button_text');
            $table->dropColumn('url');
        });
    }
}
