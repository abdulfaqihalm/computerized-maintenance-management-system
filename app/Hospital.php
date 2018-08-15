<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';

    public function modality()
    {
        return $this->hasMany('App\Modality');
    }

    public function requestOrder()
    {
        return $this->hasMany('App\RequestOrder');
    }
}
