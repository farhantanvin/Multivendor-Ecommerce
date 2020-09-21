<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ProductReview extends Model
{
    use SoftDeletes;
    protected $table = 'product_reviews';

    public function user()
    {
        return $this->belongsTo(\App\Model\User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Model\Product::class, 'product_id', 'id');
    }

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
}
