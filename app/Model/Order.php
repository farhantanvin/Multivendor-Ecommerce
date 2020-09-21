<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
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

    public function orderDetail() {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function orderShippingAddress() {
        return $this->hasOne(OrderShippingAddress::class,'order_id','id');
    }

    public function orderBillingAddress() {
        return $this->hasOne(OrderBillingAddress::class,'order_id','id');
    }

    public function shipping_method_name() {
        return $this->belongsTo(ShippingOption::class, 'shipping_method');
    }

    public function payment_gateway() {
        return $this->belongsTo(PaymentGateway::class, 'payment_method');
    }
}
