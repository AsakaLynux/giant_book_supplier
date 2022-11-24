<?php

namespace App\Http\Controllers;

use App\Models\Book_category;
use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index($id) {
        // $relasi = Book_category::where('category_id', '=', $id)->get();
        $categorie = Categories::find($id);
        $list = Categories::all();
        return view('category')->with([
            'categories' => $list,
            'index_categorie' => $categorie,
            // 'books' => $book,
        ]);
    }
}
