<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\BookStoreRequest;
use Illuminate\Support\Str;

class BooksController extends Controller
{
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
        $book = Book::create([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
        ]);
//        $book->author_id = 1; // разберись

        return redirect()
            ->back()
            ->with('success', 'Book was added successfully!');
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
        // проверить с неправильными данными. поиграйся
        $book->title = $request->input('title');
        $book->body = $request->input('body');

        $book->save();

        return redirect('/')->with('success', 'Book updated successfully!');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->back()
            ->with('success', 'Book deleted successfully!');
    }

    protected function set200Character($books)
    {
        return $books->each(function (Book $book) {
            $book->body = Str::limit($book->body, 200);

            return $book;
        });
    }
}
