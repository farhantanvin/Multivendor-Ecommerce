<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\StoreDiscountEvnt' => [
            'App\Listeners\StoreDiscountLis',
        ],
        'App\Events\UpdateDiscountEvnt' => [
            'App\Listeners\UpdateDiscountLis',
        ],
        'App\Events\ShippingOptionEvnt' => [
            'App\Listeners\ShippingOptionLis',
        ],
        'App\Events\ShopSettingEvnt' => [
            'App\Listeners\ShopSettingLis',
        ],
        'App\Events\VendorPageEvnt' => [
            'App\Listeners\VendorPageLis',
        ],
        'App\Events\TranslationLanguageEvnt' => [
            'App\Listeners\TranslationLanguageLis',
        ],
        'App\Events\CountriesEvnt' => [
            'App\Listeners\CountriesLis',
        ],
        'App\Events\StatesEvnt' => [
            'App\Listeners\StatesLis',
        ],
        'App\Events\CitiesEvnt' => [
            'App\Listeners\CitiesLis',
        ],
        'App\Events\VariantEvnt' => [
            'App\Listeners\VariantLis',
        ],
        'App\Events\VariantOptionEvnt' => [
            'App\Listeners\VariantOptionLis',
        ],
        'App\Events\StoreReviewEvnt' => [
            'App\Listeners\StoreReviewLis',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
