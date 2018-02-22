<?php

namespace App;


class Blog extends Model
{

    public function comments()
    {
    	return $this->hasMany(Comment::class)->Latest();
    }


    public function authors()
    {
    	return $this->belongsTo(Author::class);
    }



    public function addComment($body)
	{

		$this->comments()->create(compact('body'));

	}

  public function categories()
  {

    return $this->belongsToMany(Category::class);

  }

  public function create()
	{
		$categories = Category::get();
		return view('blogs.create', compact('categories'));
	}


}
