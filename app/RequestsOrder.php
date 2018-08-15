<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestsOrder extends Model
{
    protected $table = 'requestsOrders';

    public function hospital()
    {
        return $this->belongsTo('App\Hospital');
    }
}
