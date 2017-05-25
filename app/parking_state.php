<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parking_state extends Model
{
    public function parking(){
    	return $this->hasMany(parking::class);
    }
}
