<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>@yield('titleName')</title>
</head>
<body>
    <div class="header">
        <div id="titleHeader">
            <h1>Giant Book Supplier</h1>
        </div>

    </div>
    <div class="navbar">
        <a href="/">Home</a>

        <div class="dropdown">
          <button class="dropbtn">Category
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            @foreach ($categories as $categorie)
            {{-- <a href="">{{$categorie->name}}</a> --}}
            <a href="{{ url('/category/'.$categorie->id) }}">{{$categorie->name}}</a>
            @endforeach
          </div>
        </div>
        <a href="/publisher">Publisher</a>
        <a href="/contact">Contact</a>
      </div>


      @yield('content')


      <div class="footer">
        <h1>
            &#169 Happy Book Store 2022
        </h1>
    </div>
</body>
</html>
