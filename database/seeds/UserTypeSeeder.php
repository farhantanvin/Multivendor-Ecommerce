<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\UserType::create(['id' => 1, 'user_type_name' => 'admin']);
        \App\Model\UserType::create(['id' => 2, 'user_type_name' => 'vendor']);
        \App\Model\UserType::create(['id' => 3, 'user_type_name' => 'affiliate_marketer']);
        \App\Model\UserType::create(['id' => 4, 'user_type_name' => 'customer']);
    }
}
