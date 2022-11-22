<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBook() {
        $book = new Books();
        $book->title = 'Naruto';
        $book->image = 'adfadf';
        $book->author = 'kisimoto';
        $book->save();
        return view('home', ['book' => $book]);
    }
    public function showBookDetail() {
        $book = new Books();
        $book->title = 'Naruto';
        $book->image = 'adfadf';
        $book->author = 'kisimoto';
        $book->synopsis = 'asdkfhaskljgakljsdgh';
        $book->save();
        return view('book_detail', ['book' => $book]);
    }
}
