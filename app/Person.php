<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
 
 	public function movies() {
    	return $this->belongsToMany(Movie::class);
    }

    public function roles() {
    	return $this->belongsToMany(Role::class);
    }
}
