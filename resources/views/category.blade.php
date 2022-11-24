@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
    <h1>This is Category</h1>
    <h1>{{$index_categorie->name}}</h1>


        <div class="cover">
            @foreach($index_categorie->book as $y)
                <div class="card">
                <img src={{$y->image}} alt="Avatar" style="width:160px">
                    <div class="container">
                        <h4><b>{{$y->title}}</b></h4>
                        <h4>By</h4>
                        <h4><b>{{$y->author}}</b></h4>
                    </div>
                </div>

        @endforeach
        </div>

@endsection
