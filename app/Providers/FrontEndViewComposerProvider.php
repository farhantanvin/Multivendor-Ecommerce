<?php

namespace App\Providers;

use App\Model\WishList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Model\SiteSetting;
use App\Model\SocialLink;
use App\Model\Navigation;
use App\Model\HomeSetup;

class FrontEndViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.*', function ($view) {
            $topMenus             = Navigation::orderBy('serial')->where('position', '=', 1)->where('status', '=', 1)->get();
            $siteSetting          = SiteSetting::find(1);
            $socialLink           = SocialLink::find(1);
            $footer_menu_left     = Navigation::orderBy('serial')->where('position', '=', 3)->where('footer_position', '=', 1)->where('status', '=', 1)->get();
            $footer_menu_middle   = Navigation::orderBy('serial')->where('position', '=', 3)->where('footer_position', '=', 2)->where('status', '=', 1)->get();
            $footer_menu_right    = Navigation::orderBy('serial')->where('position', '=', 3)->where('footer_position', '=', 3)->where('status', '=', 1)->get();
            $selectedCategory     = HomeSetup::where('option_name', '=', 'selected_category')->first();

            $routeName = Route::currentRouteName();

            $globalData     = [
                'siteSetting'        => $siteSetting,
                'socialLink'         => $socialLink,
                'topMenus'           => $topMenus,
                'footer_menu_left'   => $footer_menu_left,
                'footer_menu_middle' => $footer_menu_middle,
                'footer_menu_right'  => $footer_menu_right,
                'selectedCategory'   => $selectedCategory,
                'routeName'   => $routeName
            ];
            $view->with('globalData', $globalData);
        });
    }
}
