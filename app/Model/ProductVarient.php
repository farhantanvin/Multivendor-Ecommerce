<?php

namespace App\Model;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ProductVarient extends Model
{
    use SoftDeletes;

    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        static::creating(function($post)
        {
            $config = [
                'table' => 'product_varients',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            $post->id = IdGenerator::generate($config);

            $post->created_by = Auth::id();
            $post->updated_by = Auth::id();
        });

        static::updating(function($post)
        {
            $post->updated_by = Auth::id();
        });
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }


    public function createdby(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function updatedby(){
        return $this->belongsTo(User::class,'updated_by');
    }
}
