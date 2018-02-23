<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function create()   

    {
    	

    }

    public function destroy(Request $request)
 
    {

    	auth()->logout();
    	return redirect()->home();
    	

    }
}
