<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AppController extends Controller
{
   
    public function index(){

        $books = book::all();
        dd($books);
        return view('welcome', compact('books'));
    }
}
