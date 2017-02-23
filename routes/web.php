<?php

Route::name('home')->get('/', 'PostController@index');
Route::name('create_post')->get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::name('login')->get('/login', 'SessionController@create');
Route::name('login')->post('/login', 'SessionController@store');
Route::name('logout')->get('/logout', 'SessionController@logout');

Route::name('register')->get('/register', 'RegistrationController@create');
Route::name('register')->post('/register', 'RegistrationController@store');

Route::name('reset')->get('/reset', 'RegistrationController@reset');

