<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table='tags';
    protected $fillable = ['tag'];
    public $timestamps = false;

    public function posts()
    {
    	return $this->belongsToMany('App\Post','posts_tags','posts_id','tags_id');

    }

}
