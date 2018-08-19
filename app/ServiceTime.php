<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTime extends Model
{
    protected $table = 'serviceTimes';

    public function serviceDetail()
    {
        $this->belongsTo('App\ServiceDetail');
    }
}
