<?php

namespace App\Listeners;

use App\Events\StoreDiscountEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\Discount;
use App\Model\DiscountToUser;
use Illuminate\Support\Facades\Auth;

class StoreDiscountLis
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
     * @param  StoreDiscountEvnt  $event
     * @return void
     */
    public function handle(StoreDiscountEvnt $event)
    {
        $request = $event->request;

        $target = new Discount();

        $target->name = $request->name;
        $target->description = $request->description;
        $target->coupon_type = $request->coupon_type;
        $target->amount      = $request->amount;
        $target->validity_times = $request->validity_times;
        $target->start_date = date("Y-m-d H:i", strtotime($request->start_date));
        $target->expired_date = date("Y-m-d H:i", strtotime($request->expired_date));
        $target->status = $request->status;

        if(Auth::user()->role_id==10){
            $target->vendor_id   = Auth::user()->id;
            $target->discount_by = 2;
        }else{
            $target->vendor_id   = NULL;
            $target->discount_by = 1;
        }

        if($target->save()){
            if($request->coupon_type=='specific_user'){

                for ($i = 0; $i < count($request->users); $i++) {
                    $datas[] = [
                        'discount_id' => $target->id,
                        'user_id' => $request->users[$i]
                    ];
                }
                DiscountToUser::insert($datas);
            }

            return true;
        }else{
            return false;
        }

        
    }
}
