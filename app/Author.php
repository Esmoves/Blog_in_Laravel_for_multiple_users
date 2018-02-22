<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function blogs()
	{
		// one author can have many blogs
		// one blog has one author
		return $this->hasMany(Blog::class)->Latest();
	}

	public function show()
	{
		// get the blogs for one author
		//$blog->author()->attach($author_id)
	}
}
