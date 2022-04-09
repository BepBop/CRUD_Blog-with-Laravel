<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <style>

        body {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        a {
            font-family: 'ui-sans-serif', sans-serif;
            font-size: 250%;
            font-weight: bolder;
            padding: 2.5%;
            color: darkblue;
            text-decoration: none;
        }

        a:hover {
            background: darkblue;
            color: white;
        }
    </style>

</head>
<body>
@if (Route::has('login'))
    @auth
        <a href="{{ url('/dashboard') }}">Dashboard</a>
    @else
        <a href="{{ route('login') }}">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
@endif

</body>
</html>
