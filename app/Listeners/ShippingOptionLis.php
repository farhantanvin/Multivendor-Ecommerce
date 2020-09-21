<?php

namespace App\Listeners;

use App\Events\ShippingOptionEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\ShippingOption;
use Illuminate\Support\Facades\Auth;

class ShippingOptionLis
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
     * @param  ShippingOptionEvnt  $event
     * @return void
     */
    public function handle(ShippingOptionEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  ShippingOption::find($id);
        }else{
            $target = new ShippingOption();
        }

        $target->method_name = $request->method_name;
        $target->charge      = $request->charge;
        $target->status      = $request->status;
        $target->vendor_id   = Auth::user()->id;

        if(Auth::user()->role_id==10){
            $target->vendor_id   = Auth::user()->id;
            $target->added_by    = 2;
        }else{
            $target->vendor_id   = NULL;
            $target->added_by    = 1;
        }

        if($target->save()){
            return true;
        }else{
            return false;
        }
    }
}
