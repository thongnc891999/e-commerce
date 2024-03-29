<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js', 'vendor/courier/build')
    
    <title>@yield('title', 'Home page')</title>
    {{-- css --}}
    @include('layouts.css')
    
</head>

<body onresize="setOffSetMarginSlide()">
    <div class="wrapper">
           {{-- header --}}
    @include('layouts.header')

    {{-- menu --}}
    {{-- @include('layouts.menu') --}}

    {{-- content --}}
    <main>
        
            @yield('content')

    </main>

    {{-- footer --}}
    @include('layouts.footer')

    {{-- js --}}
    
</div>

@include('layouts.js')
</body>

</html>