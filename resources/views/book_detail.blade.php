@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')

    <div class="detail">
        <img src={{$books->image}} alt="Avatar" style="width:200px">
        <div class="container">
          <h4><b>Title: {{$books->title}}</b></h4>
          <h4><b>Author: {{$books->author}}</b></h4>
          <h4><b>Year: {{$books->year}}</b></h4>
          {{-- <h4><b>Publisher: {{$books->publisher}}</b></h4> --}}
          <br>
          <h5><strong>Synopsis:</strong></h5>
          <p>{{$books->synopsis}}</p>
        </div>
    </div>
@endsection
