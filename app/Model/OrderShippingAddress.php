<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderShippingAddress extends Model
{
    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function state() {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
