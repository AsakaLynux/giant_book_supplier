@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
    <h1>This is Book Detail</h1>
    <br>
    <h2>{{$book->title}}</h2>
    <br>
    <h2>{{$book->image}}</h2>
    <br>
    <h2>{{$book->author}}</h2>
    <br>
    <h2>{{$book->synopsis}}</h2>
    <br>
@endsection
