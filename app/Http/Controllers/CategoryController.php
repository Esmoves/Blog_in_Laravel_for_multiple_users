<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
{

    public function index(Category $category){

      $blogs = $category->blogs;

      return view('blogs.index', compact('blogs'));

    }

    public function create()
    {
    	$this->validate(request(), [
			'name' => 'required'
  		]);

  		Category::create([
  			'name' => request('category_name'),
  		]);
  		return back();
    }
}
