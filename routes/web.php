<?php

Route::get('/', 'BlogsController@index');

//Route::get('/blogs/{id}', 'BlogsController@show');

Route::get('/blogs/create', 'BlogsController@create');

Route::post('/blogs', 'BlogsController@store');
//Route::get('/blogs/{id}/edit', 'BlogsController@edit') --> would generate a Route::patch/blogs/{id} || Er is ook een DELETE functie net als PATCH en GET en POST




