<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Author;


class RegistrationController extends Controller
{
    public function create()   
	{
    
    	
    	return view('sessions.create');


    }

	public function store(Request $request)

	{

	 	// Validate form
		$this->validate(request(), [
			'username' => 'required', 

			'firstname' => 'required', 

			'lastname' => 'required', 

			'email' => 'required',

			'password' => 'required'
		
		]);


		//create author
		$author = Author::create(request(['username', 'firstname', 'lastname', 'email', 'password']));

		//login
		auth()->login($author);

	

	}



}