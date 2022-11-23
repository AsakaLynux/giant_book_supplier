<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function category($id) {
        $category = Categories::find($id);
        $categorie = Categories::all();
        dd($category);
        // return view('category')->with([
        //     'categories-item' => $category,
        //     'categories' => $categorie,
        // ]);
    }
}
