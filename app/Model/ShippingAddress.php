<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShippingAddress extends Model
{
    public static function boot()
    {
        parent::boot();
        static::creating(function($post)
        {
            $post->created_by = Auth::id() ?? null;
            $post->updated_by = Auth::id() ?? null;
        });

        static::updating(function($post)
        {
            $post->updated_by = Auth::id() ?? null;
        });
    }

    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
