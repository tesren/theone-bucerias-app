<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('titles')

    @vite(['resources/css/app.css'])
    @yield('css')

</head>

<body>
    @include('shared.navbar')

    @yield('content')

    @include('shared.footer')

    @vite(['resources/js/app.js'])
    
    @yield('javascript')
</body>

</html>