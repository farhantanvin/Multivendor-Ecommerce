<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderDetail extends Model
{
    protected $keyType = 'string';

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

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function productVarient()
    {
        return $this->belongsTo(ProductVarient::class, 'product_varient_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function orderInfo()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
