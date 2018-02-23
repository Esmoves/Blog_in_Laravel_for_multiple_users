<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Author;

class AuthorsController extends Controller
{
    public function index(Author $author)
    {
      $blogs = $author->blogs;

      return view('blogs.multiple', compact('blogs'));

    }
}
