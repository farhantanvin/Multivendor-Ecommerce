<?php

namespace App\Listeners;

use App\Events\CitiesEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\City;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class CitiesLis
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
     * @param  CitiesEvnt  $event
     * @return void
     */
    public function handle(CitiesEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  City::find($id);
        }else{
            $target = new City();
        }

        $target->state_id      = $request->state_id;
        $target->city_name     = $request->city_name;
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
