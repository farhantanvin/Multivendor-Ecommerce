<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ProductGallery extends Model
{
    use SoftDeletes;
    protected $table='product_gallery';
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        static::creating(function($post)
        {
            $config = [
                'table' => 'product_gallery',
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
}
