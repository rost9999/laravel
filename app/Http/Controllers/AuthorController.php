<?php

namespace App\Http\Controllers;

use App\Models\Book;

class AuthorController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // показывай только первый 200 символов, не всю статью
        return view('books.index', compact('books'));
    }
    // и добавь метод на показ странички с книгой - там будет весь текст
}
