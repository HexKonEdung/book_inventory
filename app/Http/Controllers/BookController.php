<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {$items = Book::all(); return view('items.index', compact('items')); }
    public function create() { return view('items.create'); }
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'isbn' => 'required',
        'genre' => 'required',
        'published_year' => 'required|numeric',
        'status' => 'required',
        'description' => 'required'
    ]);

    Book::create($request->all());

    return redirect()->route('items.index')->with('success', 'Book added successfully!');
}
    public function show(Book $item) { return view('items.show', compact('item')); }
    public function edit(Book $item) { return view('items.edit', compact('item')); }
    public function update(Request $r, Book $item) { $item->update($r->all()); return redirect()->route('items.index'); }
    public function destroy(Book $item) { $item->delete(); return redirect()->route('items.index'); }
}
