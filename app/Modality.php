<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    protected $table = 'modalities';
    protected $primaryKey = 'siteId';
    public $incrementing = false; 
    protected $keyType = 'string';
    
    public function hospital() 
    {
        return $this->belongsTo('App\Hospital');
    }

}
