<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderBillingAddress extends Model
{
    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function state() {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
