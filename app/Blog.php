<?php

namespace App;


class Blog extends Model
{


    public function comments()
    {
    	return $this->hasMany(Comment::class)->Latest();
    }



    public function addComment($body)
	{

		$this->comments()->create(compact('body'));

	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

}
