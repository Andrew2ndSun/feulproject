<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuelquote extends Model
{
    //
    public $timestamps = false;
    protected $table = 'Fuelquote';
    protected $primaryKey = 'quoteid';

    public function Fuel()
    {
        return $this->hasOne('App\Fuel','fuel_id','fuel_id');
    }
}
