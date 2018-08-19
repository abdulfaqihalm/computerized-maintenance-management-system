<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'parts';
    protected $primaryKey = 'part_number';
    public $incrementing = false; 
    protected $keyType = 'string';

    public function purchaseOrder()
    {
        $this->hasMany('App\PurchaseOrder');
    }

    public function incomingPart() 
    {
        $this->hasMany('App\IncomingPart');
    }

    public function usedPart()
    {
        $this->hasMany('App\UsedPart');
    }
    

}
