@extends('layouts.layout')

@section('titleName', 'Giant Book Publisher')

@section('content')
    <h1>This is Home Page</h1>
    <br>
    @foreach ($books as $book)
        <h2>{{$book->title}}</h2>
        <br>
        <h2>{{$book->author}}</h2>
        <br>
        <h2>{{$book->synopsis}}</h2>
        <br>
        <h2>{{$book->year}}</h2>
        <br>
    @endforeach
@endsection
