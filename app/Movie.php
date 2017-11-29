<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public function people() {
    	return $this->belongsToMany(Person::class);
    }

    public function reviews() {
    	return $this->hasMany(Review::class);
    }

    public function trailers() {
    	return $this->hasMany(Trailer::class);
    }

    public function categories() {
    	return $this->belongsToMany(Category::class);
    }

    public function getDirector($id) {
        $people = Movie::find($id)->people;

        foreach ($people as $person) {
            foreach ($person->roles as $role) {
                if ($role->name == 'Director') {
                    return $person;
                }
            }
        }
    }

    public function getActors($id) {
        $people = Movie::find($id)->people;
        $actors = array();

        foreach ($people as $person) {
            foreach ($person->roles as $role) {
                if ($role->name == 'Actor') {
                    array_push($actors, $person);
                }
            }
        }
        return $actors;
    }

}
