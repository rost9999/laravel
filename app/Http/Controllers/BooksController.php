<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function byAuthor(Author $author)
    {
        $books = $author->books;
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $book = new Book;
        $book->title = $request->title;
        $book->body = $request->body;

        $book->save();
        return redirect('/')->with('success', 'Book was added successfully!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Book $book, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $book->title = $request->title;
        $book->body = $request->body;

        $book->save();
        return redirect('/')->with('success', 'Book updated successfully!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/')->with('success', 'Book deleted successfully!');
    }
}
