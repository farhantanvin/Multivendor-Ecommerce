<?php

namespace App\Listeners;

use App\Events\StatesEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\State;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class StatesLis
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
     * @param  StatesEvnt  $event
     * @return void
     */
    public function handle(StatesEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  State::find($id);
        }else{
            $target = new State();
        }

        $target->country_id     = $request->country_id;
        $target->state_name     = $request->state_name;
        $target->status         = $request->status;

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
