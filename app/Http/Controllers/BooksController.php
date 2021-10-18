<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\BookStoreRequest;

class BooksController extends Controller
{
    public function set200Character($books)
    {
        return $books->each(function ($book) {
            $book->body = substr($book->body, 0, 200) . '...';
            return $book;
        });
    }

    public function index()
    {
        $books = Book::all();
        $books = $this->set200Character($books);
        return view('books.index', compact('books'));
    }

    public function byAuthor(Author $author)
    {
        $books = $author->books;
        $books = $this->set200Character($books);
        return view('books.index', compact('books'));
    }

    public function store(BookStoreRequest $request)
    {
        $request->validated();
        $book = new Book(); // юзай Book::create([]);
        $book->title = $request->input('title');
        $book->body = $request->input('body');
        $book->author_id = 1;
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

    public function update(Book $book, BookStoreRequest $request)
    {
        $request->validated();
        $book->title = $request->input('title');
        $book->body = $request->input('body');

        $book->save();
        return redirect('/')->with('success', 'Book updated successfully!');
    }

    public function destroy(Book $book)
    {// статус 204 без текста. он тут никому не нужен
        $book->delete();
        return redirect('/')->with('success', 'Book deleted successfully!');
    }
}
