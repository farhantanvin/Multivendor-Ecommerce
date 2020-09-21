<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class City extends Model
{
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->created_by = Auth::id();
            $post->updated_by = Auth::id();
        });

        static::updating(function ($post) {
            $post->updated_by = Auth::id();
        });
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function country()
    {
        return $this->hasOneThrough(
            'App\Model\Country',
            'App\Model\State',
            'country_id', // Foreign key on states table...
            'id', // Foreign key on countries table...
            'id', // Local key on mechanics table...
            'id' // Local key on cars table...
        );
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
        
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }
}
