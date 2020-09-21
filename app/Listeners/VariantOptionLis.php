<?php

namespace App\Listeners;

use App\Events\VariantOptionEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\VariantOption;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class VariantOptionLis
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
     * @param  VariantOptionEvnt  $event
     * @return void
     */
    public function handle(VariantOptionEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  VariantOption::find($id);
        }else{
            $target = new VariantOption();
        }

        $target->name           = $request->name;
        $target->variant_id     = $request->variant_id;

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
