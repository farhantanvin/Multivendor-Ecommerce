<?php

namespace App\Listeners;

use App\Events\VariantEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\Variant;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class VariantLis
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
     * @param  VariantEvnt  $event
     * @return void
     */
    public function handle(VariantEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  Variant::find($id);
        }else{
            $target = new Variant();
        }

        $target->name     = $request->name;

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
