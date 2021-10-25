<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\BookStoreRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Request;

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

    public function store(BookStoreRequest $request): RedirectResponse
    {
        $book = Book::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author_id' => Author::where('name', $request->input('author_id'))->first()->id,
        ]);
        if ($book) {
            return redirect()
                ->back()
                ->with('success', 'Book was added successfully!');
        }
        return redirect(Request::url());
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    /**
     * @throws Exception
     */
    public function update(Book $book, BookStoreRequest $request)
    {
        // проверить с неправильными данными. поиграйся
        $book->title = $request->input('title');
        $book->body = $request->input('body');
        $book->author_id = Author::where('name', $request->input('author_id'))->first()->id;

        $book->save();

        return redirect('/')->with('success', 'Book updated successfully!');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/')
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
