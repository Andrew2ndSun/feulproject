<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    //
    public $timestamps = false;
	
    protected $table = 'fuel';
    protected $primaryKey = 'fuel_id';
}
