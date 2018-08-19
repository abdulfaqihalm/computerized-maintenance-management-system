<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingPart extends Model
{
    protected $table = 'incomingParts';

    public function part()
    {
        $this->belongsTo('App\Part');
    }
}
