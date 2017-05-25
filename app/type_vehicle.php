<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_vehicle extends Model
{
    public function vehicles(){
    	return $this->hasMany(vehicle::class);
    }
}
