<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController extends Controller
{
    public function index()
    {
    	$books = Book::all();

	return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
	
	return view('books.show', compact('book'));

    }

    public function buy(Book $book)
    {
    	return view('books.buy' , compact('book'));
    }

}
