<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';
    protected $fillable=['category'];
    public $timestamps = false;


    public function posts()
    {
    	return  $this->belongsToMany('App\Post','posts_categories','posts_id','categories_id');

    }

    public function parents()
    {
    	return $this->hasMany('App\Category','parent_id');
    }

    /* 
		this function retun all sub categories of a specific category
    */
     public  function Category_children()
    {
    	return $this->where('parent_id',$this->id)->get();
    }
}
