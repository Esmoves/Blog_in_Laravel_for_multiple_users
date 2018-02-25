<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;
use \App\Category;
use \App\Author;

class BlogsController extends Controller
{

	public function __construct()
	{

		$this->middleware('auth')->except(['index', 'show', 'create', 'store']);

	}


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
			$authors = Author::get();
			return view('blogs.create', compact('categories', 'authors'));
		}


	public function store(Request $request)
		{
			$this->validate(request(), [
				'titel' => 'required',
				'excerp' => 'required',
				'body' => 'required'
			]);

			$blog = new Blog;
			$blog->user_id = $request->user_id;
			$blog->titel = $request->titel;
			$blog->excerp = $request->excerp;
			$blog->body = $request->body;
			$blog->image = $request->image;

			$blog->save();

			$blog->categories()->attach(request('category_id'));

			return redirect("/");
		}

}
