<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USA Livewire</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/Bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/jquery-3.6.0.js')}}">
    <link rel="icon" href="{{asset('assets/img/USA.svg')}}">
    <script src="{{asset('assets/lib/turbolinks.min.js')}}" defer data-turbolinks-track="reload"></script>
    <script src="{{asset('assets/lib/turbolinks.js')}}" defer data-turbolinks-track="reload"></script>


    @livewireStyles
    @livewireScripts


</head>

<body class="bg-light flex flex-wrap justify-content-center">


        <div class="flex w-full justify-content-between bg-purple-900 px-4 text-white">
        <a class="mx-3 py-4" href="{{route('home')}}">Home</a>
        @auth
          @livewire('logout')            
        @endauth
        @guest
        <div class="py-4">
            <a class="mx-3 " href="{{route('login')}}">Login</a>
            <a class="mx-3 " href="{{route('Regitser')}}">Regitser</a>
        </div>
        @endguest
     

        </div>

        @yield('content')

  

  

</body>


</html>


