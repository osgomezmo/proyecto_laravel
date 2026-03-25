<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
//heredar el modelo
class BookController extends Controller
{
    //metodos de la clase book contoller
    public function index(){
        $books= Book::all();
        return view('books', compact('books'));
    }
    public function store(Request $request){
        $book = new Book();

        $book->name = $request->name;
        $book->price = $request->price;
        $book->pages = $request->pages;
        $book->save();
        
        return redirect()->route('books.index');
    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function edit($id){

        $book= Book::find($id);
        return view('books_edit', compact('book'));
    }

    public function update(Request $request, $id){
        $book= Book::find($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->pages = $request->pages;
        $book->save();
        
        return redirect()->route('books.index');
    }
}
