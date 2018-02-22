<?php

namespace App;

class Author extends Model
{
  public function blogs()
	{
		return $this->hasMany(Blog::class);
	}

  public function getRouteKeyName(){
    return 'username';
  }

	public function show()
	{
		// get the blogs for one author
		//$blog->author()->attach($author_id)
	}
}
