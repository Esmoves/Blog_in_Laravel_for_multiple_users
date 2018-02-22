<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

use App\Comment;


class CommentsController extends Controller
{
    
	public function store(Blog $blog)
	{
		$this->validate(request(), [ 
                'body' => 'required|min:2',
                'user_id' => 'required'
            ]);

            $comment = new Comment;

            $comment->blog_id = $blog->id;
            $comment->user_id = request()->user_id;
        	$comment->body = request()->body;

            $comment->save();
            
        	return back();

	}

}
