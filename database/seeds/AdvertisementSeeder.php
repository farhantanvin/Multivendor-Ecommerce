<?php

use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Advertisement::create(['id' => 1, 'advertisement_option' => 'banner_portrait_top', 'text' => 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', 'highlighted_text' => '70% OFF', 'button_text' => 'Shop Now', 'image' => 'public/upload/advertisement/8hwVI19MZRjJFw31maNm.png', 'url' => 'www.facebook.com', 'status' => 1, 'created_by' => 1, 'updated_by' => 1]);
        \App\Model\Advertisement::create(['id' => 2, 'advertisement_option' => 'banner_portrait_bottom', 'text' => 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', 'highlighted_text' => '100% OFF', 'button_text' => 'Book Now', 'image' => 'public/upload/advertisement/8hwVI19MZRjJFw31maNm.png', 'url' => 'www.facebook.com', 'status' => 1, 'created_by' => 1, 'updated_by' => 1]);
        \App\Model\Advertisement::create(['id' => 3, 'advertisement_option' => 'promotion_offer_first', 'text' => 'MORE TREADING PRODUCT SHOWCASING', 'highlighted_text' => '', 'button_text' => 'Shop Now', 'image' => 'public/frontend/assets/images/products/1.jpg', 'url' => '#', 'status' => 1, 'created_by' => 1, 'updated_by' => 1]);
        \App\Model\Advertisement::create(['id' => 4, 'advertisement_option' => 'promotion_offer_second', 'text' => 'ALSO SHOWS PRODUCTS WITH', 'highlighted_text' => '70% OFF', 'button_text' => 'Shop Now', 'image' => 'public/frontend/assets/images/products/GamePad.jpg', 'url' => '#', 'status' => 1, 'created_by' => 1, 'updated_by' => 1]);
        \App\Model\Advertisement::create(['id' => 5, 'advertisement_option' => 'promotion_offer_third', 'text' => 'THID RAMADANFEATURE ADAVRTISEMENT/PROMOTIONAL STUFFS', 'highlighted_text' => '', 'button_text' => 'Book Now', 'image' => 'public/frontend/assets/images/products/1.jpg', 'url' => '#', 'status' => 1, 'created_by' => 1, 'updated_by' => 1]);
    }
}
