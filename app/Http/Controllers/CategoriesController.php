<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index(Category $category) 
    {
    	$movies = $category->movies;

    	return view('movies.index', compact('movies'));
    }
}
