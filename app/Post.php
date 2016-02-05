<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
      protected $table = 'posts';
      protected $fillable = ['title','excrypt','content','created_at','updated_at','published','published_at','views','image'];

      public function tags()
      {
      	return $this->belongsToMany('App\Tag','posts_tags','posts_id','tags_id');
      }


	 public function categories()
      {
      	return $this->belongsToMany('App\Category','posts_categories','posts_id','categories_id');
      }
       public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
       public function getCategoryListAttribute()
   {
        return $this->categories->lists('id')->all();
   }
   

     public static function published_posts()
     {
      return static::where('published',1)->get();
     }
      public function scopeUnPublished($query)
     {
      return $query->where('published_at','>=',Carbon::now());
     }
     public function scopePublished($query)
     {
      return $query->where('published_at','<=',Carbon::now());
     }
     public function SetPublishedAtAttribute($date)
     {
            $this->attributes['published_at']=Carbon::parse($date);
     }
  
}
