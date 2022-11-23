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
    // public function showCategorie() {
    //     $categorie = Categories::all();
    //     return view('layouts.layout', ['categories'=>$categorie]);
    // }
    public function find($id) {

        $book = Books::find($id);
        // dd($book);
        return view('book_detail', ['books'=>$book]);
    }
}
