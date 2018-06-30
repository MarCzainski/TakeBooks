<?php

Route::get('/', function () {
    return view('layout');
});

Route::get('/about', function () {
	return view('about/index');
});

Route::get('/book', 'BooksController@index');
Route::get('/book/{book}', 'BooksController@show');
Route::get('/book/create', 'BooksController@create');
Route::get('/book/{book}/buy' , 'BooksController@buy');