<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){

        $books = Book::all();
        return view('books', compact('books'));
    }

    public function showAllBook(){

        $books = Book::all();
        return view('books/index', compact('books'));
    }
    public function create(){
        return view('books/create');
    }
    
    public function store(request $request){

        $request->validate([

            'title'=> 'required|string|min:5|max:20',
            'author'=> 'required|string|min:5|max:20',
            'page'=> 'required|integer|min:1',
            'title'=> 'required|integer|min:2000|max:2021',

        ]);
    
        Book::create([
        'title'=> $request->title,
        'author'=> $request->author,
        'page'=> $request->page,
        'released_year'=> $request->released_year,
        ]);



        return redirect('/books/manage')-> with('success', 'The Book has been successfuly added');


    }
    public function edit($id){
        
        $books = Book::find($id);
        return view('books/edit', compact('book'));        
        
    }

    public function update(Request $request, $id){

        $request->validate([

            'title'=> 'required|string|min:5|max:20',
            'author'=> 'required|string|min:5|max:20',
            'page'=> 'required|integer|min:1',
            'title'=> 'required|integer|min:2000|max:2021',

        ]);
        
        $book= Book::findOrFail($id);
        $book->update([
            'title'=> $request->title,
            'author'=> $request->author,
            'page'=> $request->page,
            'released_year'=> $request->released_year,


        ]);
        return redirect('/books/manage')-> with('success', 'The Book has been successfuly edited');
    }
    
    public function destroy($id){

        $book= Book::findOrFail($id);
        $book->delete();

        return redirect('/books/manage')-> with('success', 'The Book has been successfuly erased');
    }
}
