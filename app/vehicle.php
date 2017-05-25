<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $guarded = []; //para que nos permita crear los elementos

    // add function relation belogsTo User
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function lugar(){
    	return $this->belongsTo(parking::class);
    }

    public function type_vehicle(){
    	return $this->belongsTo(type_vehicle::class);
    }
}
