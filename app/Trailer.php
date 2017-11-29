<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    public function movie() {
    	$this->belongsTo(Movie::class);
    }
}
