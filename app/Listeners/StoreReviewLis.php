<?php

namespace App\Listeners;

use App\Events\StoreReviewEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\StoreReview;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class StoreReviewLis
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
     * @param  StoreReviewEvnt  $event
     * @return void
     */
    public function handle(StoreReviewEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        $check_existing = StoreReview::where('product_id','=', $request->vendor_id)
            ->where('email','=', $request->email)
            ->get();

        if(count($check_existing)>0){
            $target = StoreReview::find($check_existing->id);
        }else{
            $target = new StoreReview();
        }

        $target->vendor_id     = $request->vendor_id;
        $target->customer_name = $request->customer_name;
        $target->email         = $request->email;
        $target->review        = $request->review;
        $target->rating        = $request->rating;
        $target->status        = $request->status;

        if($target->save()){
            return true;
        }else{
            return false;
        }
    }
}
