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

    public function user()  // Use this to get the usernam of
    // the author of the post where this comment belongs to:
    // $comment->post-user
    {
      return $this->belongsTo(Author::class);
    }


    public function authors()
    {

    	return $this->belongsTo(Author::class);

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
