<?php

namespace App\Http\Controllers;

use App\Models\Book;

class AuthorController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
