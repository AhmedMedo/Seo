<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Tag;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::all();
        return view('admin.cat',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$categories=Category::all();

        $cat=new Category;
        $cat->category=$request->input('cat');
        $cat->description=$request->input('description');
        if($request->input('category_parent') == '0')
        {
            $cat->parent_id=null;
        }
        else{
        $cat->parent_id=$request->input('category_parent');
    }
        $cat->save();
        return redirect('seodashboard/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category=Category::findOrFail($id);
        $category_list=Category::lists('category','id')->toArray();
         $category_list['0']='None';

        return view('admin.editcat',compact('category','category_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cat=category::findOrFail($id);
        $cat->update(['category'=>$request->input('cat')]);
        $cat->update(['description'=>$request->input('description')]);
        $cat->update(['category_paent'=>$request->input('category_parent')]);

        return redirect('seodashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cat=Category::findOrFail($id);
        $cat->delete();
        return redirect('seodashboard/categories');
    }
}
