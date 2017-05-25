<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parking extends Model
{
    public function estado(){
    	return $this->belongsTo(parking_state::class);
    }
}
