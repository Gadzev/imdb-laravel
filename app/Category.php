<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function movies() {
    	return $this->belongsToMany(Movie::class);
    }

    public static function allCategories() {
    	return static::all();
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
}
