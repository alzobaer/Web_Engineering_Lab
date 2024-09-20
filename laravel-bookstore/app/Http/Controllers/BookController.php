<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all(); // Retrieve all books from the database
        return view('books.index', compact('books')); // Pass the data to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create'); // Return the view for creating a book
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|size:13|unique:books,isbn',
            'stock' => 'required|integer|min:0',
            'price' => 'nullable|numeric|min:0',
        ]);

        // Create a new book instance and save it to the database
        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book created successfully.'); // Redirect after creation
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book')); // Show the details of the selected book
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book')); // Return the edit view for the selected book
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|size:13|unique:books,isbn,' . $book->id,
            'stock' => 'required|integer|min:0',
            'price' => 'nullable|numeric|min:0',
        ]);

        // Update the book instance with new data
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully.'); // Redirect after update
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete(); // Delete the book from the database

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.'); // Redirect after deletion
    }
}
