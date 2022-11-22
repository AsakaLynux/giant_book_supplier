<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showAll() {
        $book = Books::all();
        return view('home', ['books'=>$book]);
    }
}
