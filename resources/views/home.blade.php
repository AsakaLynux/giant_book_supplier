@extends('layouts.layout')

@section('titleName', 'Giant Book Publisher')

@section('content')
    <h1>This is Home Page</h1>
    <br>
    <h2>{{$book->title}}</h2>
    <br>
    <h2>{{$book->image}}</h2>
    <br>
    <h2>{{$book->author}}</h2>
    <br>
@endsection
