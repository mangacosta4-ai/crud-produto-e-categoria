<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // GET /books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // GET /books/create
    public function create()
    {
        return view('books.create');
    }

    // POST /books
    public function store(Request $request)
    {

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Livro criado com sucesso!');
    }

    // GET /books/{book}
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // GET /books/{book}/edit
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // PUT /books/{book}
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'nullable|integer',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Livro atualizado!');
    }

    // DELETE /books/{book}
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Livro removido!');
    }
}