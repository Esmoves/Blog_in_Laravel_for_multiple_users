<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;

class BlogsController extends Controller
{
	public function index()
	{
		$blogs = Blog::orderBy('id', 'desc')->get();
		return view('blogs.index', compact('blogs'));
	}

	public function show()
	{
		return view('blogs.show');
	}

	public function create() 
	{
		return view('blogs.create');
	}

	public function store(Request $request){
		// dd(request()->all()); -> tested
		$blog = new Blog;
		$blog->user_id = $request->user_id;
		$blog->titel = $request->titel;
		$blog->excerp = $request->excerp;
		$blog->body = $request->body;
		$blog->image = $request->image;

		$blog->save();

		return redirect("/");
	}
}

