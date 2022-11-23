@extends('layouts.layout')

@section('titleName', 'Giant Book Publisher')

@section('content')
    <div class="cover">
        @foreach ($books as $book)
    <div class="card">
        <img src={{$book->image}} alt="Avatar" style="width:160px">
        <div class="container">
          <h4><b>{{$book->title}}</b></h4>
          <h4>By</h4>
          <h4><b>{{$book->author}}</b></h4>
          {{-- <p>Architect & Engineer</p> --}}
        </div>
        <br>
        <a href="{{ url('/book_detail/'.$book->id) }}"><button>Detail</button></a>
      </div>
    @endforeach
    </div>
@endsection
