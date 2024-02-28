<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href='{{asset('assets/css/style.css')}}' rel='stylesheet' type='text/css'>
</head>
<body>
<header class="header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('logo.png')}}" alt="logo">
                </a>
            </div>
        </div>
    </div>
    <nav class="header_bottom">
        <div class="container">
            <div class="row">
                <ul class="menu">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li><a href="{{route('home')}}">Bills &amp; receipts</a></li>
                    <li><a href="{{route('home')}}">Trade License</a></li>
                    <li><a class="active" href="{{route('home')}}">Certificate</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="">
    @yield('content')

</main>

</body>
</html>
