<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showCategorie() {
        $categorie = Categories::all();
        return view('contact', ['categories' => $categorie]);
    }
}
