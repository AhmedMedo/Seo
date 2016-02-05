<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    //view the home page
    public function show()
    {
    	return view('home');
    }

    //view all categories
    public function showCategories()
    {
    	return view('categories');
    }

    public function categoryPosts($id)
    {
    	//return all posts related to this category
    }


    //view  posts of specific category
}
