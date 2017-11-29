<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;
use Auth;

class ReviewsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function store(Movie $movie)
    {
    	$this->validate(request(), [
    		'body' => 'required|min:6'
    	]);

    	Review::create([
    		'body' => request('body'),
    		'movie_id' => $movie->id,
    		'user_id' => Auth::id()
    	]);

    	return back();
    }
}
