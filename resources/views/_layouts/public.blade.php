<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('cad.community_name', 'Community Name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&amp;family=Oswald:wght@500&amp;display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://kit.fontawesome.com/0bcda0788a.js" crossorigin="anonymous"></script>

    @yield('styles')
</head>

<body class="bg-gray-800">

    @include('_inc.public.navbar')

    @include('_inc.alerts')

    <div class="my-8">
        @yield('content')
    </div>

    @include('_inc.public.footer')

    @yield('scripts')

</body>

</html>
