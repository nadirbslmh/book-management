<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\File as FileValidator;

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
            'description' => 'required',
            'image' => FileValidator::types(['jpg', 'png', 'jpeg', 'gif'])
        ]);

        // upload image file
        if ($request->hasFile('image')) {
            $fields['image'] = $request->file('image')->store('images', 'public');
        }

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
            'description' => 'required',
            'image' => FileValidator::types(['jpg', 'png', 'jpeg', 'gif'])
        ]);

        // upload image file
        if ($request->hasFile('image')) {
            // delete old image
            File::delete('storage/' . $book->image);

            // upload image
            $fields['image'] = $request->file('image')->store('images', 'public');
        }

        // update book data
        $book->update($fields);

        // redirect to index page
        return redirect('/');
    }

    // delete book data
    public function destroy(Book $book)
    {
        File::delete('storage/' . $book->image);

        $book->delete();

        return redirect('/');
    }

}