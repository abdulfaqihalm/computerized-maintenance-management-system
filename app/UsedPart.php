<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedPart extends Model
{
    protected $table = 'usedParts';

    public function part()
    {
        $this->belongsTo('App\Part');
    }

    public function serviceDetail()
    {
        $this->belongsTo('App\ServiceDetail');
    }
}
