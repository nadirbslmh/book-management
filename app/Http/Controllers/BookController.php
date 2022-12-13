<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // return all books page
    public function index()
    {
        $books = Book::latest()->get();

        return view('books.index', [
            'books' => $books
        ]);
    }

    // return create page
    public function create()
    {
        return view('books.create');
    }

    // create a new book data
    public function store(Request $request)
    {
        // validation
        $fields = $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required'
        ]);

        // create a new book data
        Book::create($fields);

        // redirect to index page
        return redirect('/');
    }

    // return single book data
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    // return edit book page
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    // update book data
    public function update(Request $request, Book $book)
    {
        // validation
        $fields = $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required'
        ]);

        // update book data
        $book->update($fields);

        // redirect to index page
        return redirect('/');
    }

    // delete book data
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/');
    }

}