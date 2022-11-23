@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
    <h1>This is Category</h1>
    <h1>{{$index_categorie->name}}</h1>

    @foreach ($relation as $x)
        <p>{{$x->book_id}}</p>
        {{-- @foreach ($books as $list_book)
            <h2>{{$list_book->name}}</h2>
        @endforeach --}}
    @endforeach
@endsection
