<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Category;
use App\Post;
use \Input as Input;

class PostController extends Controller
{

/* this private function take any new tag and add it to tags table
  @param array
  return array

*/
   private function ConvertTagsToList($tags)
    {
           foreach($tags as $tag)
        {
            if(!is_numeric($tag))
            {
                $new_tag=new Tag;
                $new_tag->tag=$tag;
                $new_tag->save();//save the type
                //remove it from the array
                $tags=array_diff($tags,array($tag));
                $lastTagId=$new_tag->id;
                array_push($tags,$lastTagId);
            }
        }
        return $tags;
    }

    /**
    *Show the dashboard
    */

    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display a listing of all posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view all posts
        $posts=Post::all();
        return view('admin.allposts',compact('posts'));


    }

    /**
     * Show the form for creating a new post
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view admin.create
        // this page need all tags and type in database
        $tags=Tag::lists('tag','id');
        $category=Category::lists('category','id');
        return view('admin.create',compact('tags','category'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //handel the request

          $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:67',
            'image'=>'required|image|mimes:jpeg,png|max:5000'
        ]);
           if ($validator->fails()) {
            return redirect('seodashboard/posts/create')
                        ->withErrors($validator)
                        ->withInput();
        }
          $post=new Post;
          $post->title=$request->input('title');
          $post->content=$request->input('content');
          $post->published=$request->input('status');
          $post->excrypt=str_limit($request->input('excrypt'),155);
          $tags=$request->input('tags');
          $categories=$request->input('categories');
        $tags=$this->ConvertTagsToList($tags);
          //save image path in database
          if($request->hasFile('image'))
          {
            $destinationPath='images';
            $file=$request->file('image');
            $fileName=$file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
            $post->image=$fileName;
          }

          $post->save();
          $post->tags()->attach($tags);
          $post->categories()->attach($categories);
          return redirect('seodashboard/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //show specific post in admin.posts
        //$post=Post::findOrFail($id);
        $title=urldecode($title);
        $post=Post::where('title',$title)->first();
        $keyword=$post->tags->implode('tag',",");

        return view('admin.post',compact('post','keyword'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $tags=Tag::lists('tag','id');
        $category=Category::lists('category','id');
        return view('admin.edit',compact('post','tags','category'));

        //show editpagein admin.edit
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
        //handle edit process
        $post=Post::findOrFail($id);
        $post->update($request->all());
        $post->update(['published'=>$request->status]);
        $categories=$request->input('categories');
        $tags=$request->input('tags');
         if($request->hasFile('image')){
            $destinationPath='images';
            $file=$request->file('image');

            $fileName=$file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
             $post->update(['image'=>$fileName]);

          }
         $tags=$this->ConvertTagsToList($tags);

        $post->tags()->sync($tags);
        $post->categories()->sync($categories);
        return redirect('seodashboard/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // handle delete process
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('seodashboard/posts');
    }


}
