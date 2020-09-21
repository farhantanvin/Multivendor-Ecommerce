<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ProductTag extends Model
{
    
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
        return $this->belongsTo(\App\Model\User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(\App\Model\User::class, 'updated_by');
    }
}
