<?php

use Illuminate\Database\Seeder;

class HomeSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\HomeSetup::create(['id' => 1, 'option_name' => 'selected_category','option_value'=>1,'status'=>1]);
       
    }
}
