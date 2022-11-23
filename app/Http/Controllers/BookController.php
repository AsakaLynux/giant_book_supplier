<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;

class BookController extends Controller
{
    public function showAll() {
        $book = Books::all();
        // dd($book);
        $categorie = Categories::all();
        return view('home')->with([
            'categories' => $categorie,
            'books' => $book,
        ]);

    }

    public function find($id) {

        $book = Books::find($id);
        $categorie = Categories::all();
        // dd($book);
        return view('book_detail')->with([
            'books' => $book,
            'categories' => $categorie
        ]);
    }
}
