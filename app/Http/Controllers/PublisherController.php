<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function showAll() {
        $categorie = Categories::all();
        $getPublisher = Publisher::all();
        return view('publisher')->with([
            'categories' => $categorie,
            'publisher' => $getPublisher,
        ]);
    }

    public function find($id) {
        $publisher = Publisher::find($id);
        $get = Categories::all();
        return view('publisher_detail')->with([
            'publisher' => $publisher,
            'categories' => $get
        ]);
    }
}
