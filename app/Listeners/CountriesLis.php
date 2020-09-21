<?php

namespace App\Listeners;

use App\Events\CountriesEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\Country;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class CountriesLis
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CountriesEvnt  $event
     * @return void
     */
    public function handle(CountriesEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  Country::find($id);
        }else{
            $target = new Country();
        }

        $target->country_name  = $request->country_name;
        $target->status        = $request->status;

        if(Auth::user()->role_id==10){
            $target->vendor_id   = Auth::id();
        }else{
            $target->vendor_id   = NULL;
        }

        if($target->save()){
            return true;
        }else{
            return false;
        }
    }
}
