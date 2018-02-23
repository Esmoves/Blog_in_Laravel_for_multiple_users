<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
{

    public function index(Category $category){

      $blogs = $category->blogs;

      return view('blogs.multiple', compact('blogs'));

    }

    public function create()
    {

  		$categories = Category::get();
      return view('categories.create', compact('categories'));

    }

    public function store(Category $category)
    {
      $this->validate(request(), [ 
                'name' => 'required|min:2'
            ]);

            $category = new Category;

            $category->name = request()->name;

            $category->save();
            
          return back();

  }
}
