<?php

Route::get('/', 'BlogsController@index');
Route::get('/blogs/one', 'BlogsController@show');
Route::get('/blogs/create', 'BlogsController@create');
Route::get('/blogs', 'BlogsController@store');
