<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,100;1,300&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <title>@yield('title', 'Home page')</title>
        {{-- css --}}
        @include('layouts.css')
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style_header_footer.css">
    <link rel="stylesheet" href="./css/home/style_home.css">
    <link rel="stylesheet" href="./css/style-slide.css">
    <link rel="stylesheet" href="./css/products/style_products.css">
    <link rel="stylesheet" href="./css/contact/style_contact.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/header_footer/menu_library.js"></script>
    
</head>

<body onresize="setOffSetMarginSlide()">
    <div class="wrapper">
           {{-- header --}}
    @include('layouts.header')

    {{-- menu --}}
    {{-- @include('layouts.menu') --}}

    {{-- content --}}
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- footer --}}
    @include('layouts.footer')

    {{-- js --}}
    @include('layouts.js')
     
    </div>
    <script src="./js/slideShow.js"></script>
</body>

</html>