<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

use App\Comment;

class CommentsController extends Controller
{
    
	public function store(Blog $blog)
	{

		Comment::create([
			'blog_id' => $blog->id,
			'user_id' => request('user_id'),
			'body' => request('body')
		]);

		return back();

	}

}
