@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
        <div class="publisher">
            <img src={{$publisher->image}} alt="Avatar" style="width:200px">
            <h2>{{$publisher->name}}</h2>
            <h2>Address: {{$publisher->address}}</h2>
            <h2>Phone: {{$publisher->phone}}</h2>
            <h2>Email: {{$publisher->email}}</h2>

            <div class="cover">
                @foreach($publisher->book as $y)
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

        </div>


@endsection
