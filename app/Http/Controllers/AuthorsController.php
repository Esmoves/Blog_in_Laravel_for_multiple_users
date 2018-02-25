<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Author;

class AuthorsController extends Controller
{
    public function index(Author $user)
    {
    //  $blogs = $user->blogs()->take(5)->orderBy('id', 'desc')->get();

      $userid= $user->id;
      $blogs = DB::table('blogs')->where('user_id', '=', $userid)->get();
    //  $blogs = $user->blogs()->take(5)->orderBy('id', 'desc')->get();

      return view('blogs.multiple', compact('blogs'));

    }
}
