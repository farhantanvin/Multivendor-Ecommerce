<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ProductRelated extends Model
{
    use SoftDeletes;
    public static function boot()
    {
        parent::boot();
        static::creating(function($post)
        {
            $post->created_by = Auth::id();
            $post->updated_by = Auth::id();
        });

        static::updating(function($post)
        {
            $post->updated_by = Auth::id();
        });
    }
}
