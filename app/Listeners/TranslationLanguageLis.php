<?php

namespace App\Listeners;

use App\Events\TranslationLanguageEvnt;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\TranslationLanguage;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\OwnLibrary;

class TranslationLanguageLis
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
     * @param  TranslationLanguageEvnt  $event
     * @return void
     */
    public function handle(TranslationLanguageEvnt $event)
    {
        $request = $event->request['request'];
        $id      = $event->request['id'];

        if($id AND !empty($id)){
            $target =  TranslationLanguage::find($id);
        }else{
            $target = new TranslationLanguage();
        }

        $target->language_name  = $request->language_name;
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
