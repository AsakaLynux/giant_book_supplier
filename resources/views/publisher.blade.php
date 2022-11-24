@extends('layouts.layout')

@section('titleName', 'Giant Book Supplier')

@section('content')
    @foreach ($publisher as $x)
        <div class="publisher">
            <img src={{$x->image}} alt="Avatar" style="width:200px">
            <h2>{{$x->name}}</h2>
            <h2>Address: {{$x->address}}</h2>
            <h2>Phone: {{$x->phone}}</h2>
            <h2>Email: {{$x->email}}</h2>

            <div class="cover">
                @foreach($x->book as $y)
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

    @endforeach

@endsection
