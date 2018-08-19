<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $table = 'serviceDetails';

    public function usedPart() 
    {
        $this->hasMany('App\UsedPart');
    }

    public function serviceTime()
    {
        $this->hasMany('App\ServiceTIme');
    }
}
