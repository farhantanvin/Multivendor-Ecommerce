<?php

namespace App\Model;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PaymentResponce extends Model
{
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {

            $paymentStatusId = [
                'table' => 'payment_responces',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];
            $post->id = IdGenerator::generate($paymentStatusId);
            $post->created_by = Auth::id();
            $post->updated_by = Auth::id();
        });

        static::updating(function ($post) {
            $post->updated_by = Auth::id();
        });
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function createdby()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedby()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

}
