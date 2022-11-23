@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
    <h1>This is Book Detail</h1>
    <br>
    <img src={{$books->image}} alt="Avatar" style="width:100px">
        <div class="container">
          <h4><b>{{$books->title}}</b></h4>
          <br>
          <h4>By</h4>
          <br>
          <h4><b>{{$books->author}}</b></h4>
          {{-- <p>Architect & Engineer</p> --}}
        </div>
@endsection
