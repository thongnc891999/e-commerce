
{{-- /**
* define CSS file GLOBAL
* START
*/ --}}
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,100;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_header_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/style_home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/introduc/style_introduc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products/style_products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact/style_contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart/style_cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product/style_product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newses/style_news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news/style_news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout/style_checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register/style_register.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login/style_login.css')}}">  

    {{-- /**
* define CSS file GLOBAL
* END
*/ --}}
    @stack('css')