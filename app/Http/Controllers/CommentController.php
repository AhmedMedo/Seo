<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    // show the comment page

    public function show()
    {
    	return view('admin.comment');
    }
}
