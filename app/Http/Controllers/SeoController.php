<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Tag as Tags;
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

    /* user login */
  public function doLogin(Request $request)
    {

        // get all info
        $credentials=[
        	'email' =>$request->input('email'),
        	'password' =>$request->input('password'),

        ];
        //$email=$request->input('email');
        //$password=$request->input('password');
        $remember=$request->input('remember_me');
           if(Auth::attempt($credentials,$remember))
        {
        	            
            return redirect('/');
            
        } 
        else
        {


        return redirect('/')->with('message','error');


   		 }


    }

    /* user logout */

    public function doLogout()
    {
    	Auth::logout();
    	return redirect('/');

    }


    //view  posts of specific category
}
