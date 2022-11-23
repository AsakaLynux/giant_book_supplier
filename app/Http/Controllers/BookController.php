<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use GuzzleHttp\Psr7\Request;

class BookController extends Controller
{
    public function showAll() {
        $book = Books::all();
        // dd($book);
        $get = Categories::all();
        return view('home')->with([
            'categories' => $get,
            'books' => $book,
        ]);

    }

    public function find($id) {

        $book = Books::find($id);
        $get = Categories::all();
        // dd($book);
        return view('book_detail')->with([
            'books' => $book,
            'categories' => $get
        ]);
    }

}
