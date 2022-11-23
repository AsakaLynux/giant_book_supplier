<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function showAll() {
        $categorie = Categories::all();
        // dd($categorie);
        return view('layouts.layout', ['categories' => $categorie]);
    }
}
