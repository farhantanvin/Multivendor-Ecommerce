<?php

namespace App\Listeners;

use App\Events\VendorPageEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\VendorPage;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class VendorPageLis
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
     * @param  VendorPageEvnt  $event
     * @return void
     */
    public function handle(VendorPageEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  VendorPage::find($id);
        }else{
            $target = new VendorPage();
        }

        $target->page_title  = $request->page_title;
        $target->description = $request->description;
        $target->sl_no       = $request->sl_no;
        $target->slug        = strtolower(str_replace(" ", "_", $request->page_title));
        $target->status      = $request->status;

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
