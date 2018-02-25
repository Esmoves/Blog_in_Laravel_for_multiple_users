<?php

namespace App;
use Illuminate\Foundation\Auth\User;

class Author extends User
{
  public function blogs()
	{
		return $this->hasMany(Blog::class);
	}



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'email', 'password',
    ];

  public function getRouteKeyName(){
    return 'username';
  }

	public function show()
	{
		// get the blogs for one author
		$blog->author()->attach($author_id);
	}
}
