<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::with('book')->get();
        $books = Book::all();
        return view('author', compact('authors', 'books'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){
    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author = new Author();

        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birthday = $request->birthday;
        $author->id_book = $request->id_book;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author= Author::find($id);
        $books = Book::all();
        return view('author_edit', compact('author', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author= Author::find($id);
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birthday = $request->birthday;
        $author->id_book = $request->id_book;
        $author->save();
        
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
