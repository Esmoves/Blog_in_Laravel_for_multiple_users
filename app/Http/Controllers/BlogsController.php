<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;
use \App\Category;

class BlogsController extends Controller
{
	public function index()
		{
			$blogs = Blog::latest()
			->get();

			return view('blogs.index', compact('blogs'));
		}


	public function show(Blog $blog)
		{
			return view('blogs.show', compact('blog'));
		}


		public function create()
		{
			$categories = Category::get();
			return view('blogs.create', compact('categories'));
		}


	public function store(Request $request)
		{
			$this->validate(request(), [
				'titel' => 'required',
				'excerp' => 'required',
				'body' => 'required'
			]);

			$blog = new Blog;
			$blog->author_id = $request->user_id;
			$blog->titel = $request->titel;
			$blog->excerp = $request->excerp;
			$blog->body = $request->body;
			$blog->image = $request->image;

			$blog->save();

			$blog->categories()->attach(request('category_id'));

			return redirect("/");
		}

}
