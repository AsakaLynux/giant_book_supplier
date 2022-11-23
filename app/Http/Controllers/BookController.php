<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showAll() {
        $book = Books::all();
        // dd($book);
        return view('home', ['books'=>$book]);
    }
    public function find($id) {

        $book = Books::find($id);
        // dd($book);
        return view('book_detail', ['books'=>$book]);
    }
}
