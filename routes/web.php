<?php


Route::get('/', 'BlogsController@index');

Route::get('/blogs/create', 'BlogsController@create');

Route::post('/blogs', 'BlogsController@store');

Route::get('/blogs/{blog}', 'BlogsController@show');

Route::get('/blogs/authors/{author}', 'AuthorsController@index');

Route::post('/blogs/{blog}/comments', 'CommentsController@store');

Route::get('/blogs/categories/{category}', 'CategoryController@index');

Route::post('/categories', 'CategoryController@store');

Route::get('/categories/create', 'CategoryController@create');

//Route::get('/blogs/{id}/edit', 'BlogsController@edit') --> would generate a Route::patch/blogs/{id} || Er is ook een DELETE functie net als PATCH en GET en POST
