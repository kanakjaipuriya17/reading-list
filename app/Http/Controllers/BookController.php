<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display all books and filter by status
    public function index()
{
    $books = Book::all();

    return view('books.index', compact('books'));
}

    // Show the form to add a book
    public function create()
    {
        return view('books.create');
    }

    // Save a new book
    public function store(Request $request)
    {
        $validated = $request->validate([
            'notes' => 'nullable|string',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'status' => 'required|in:to-read,reading,finished',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Book added successfully!');
    }

    // Show the edit form
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Update book details
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'notes' => 'nullable|string',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'status' => 'required|in:to-read,reading,finished',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully!');
    }

    // Delete a book
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully!');
    }
}