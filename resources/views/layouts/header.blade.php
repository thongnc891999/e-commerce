<div class="header">

    <div class="header__head">
        <div class="container header--inner">
            <div class="header__head--left">
                <p><i class="fas fa-clock"></i>Open time: 8:00 - 18:00 Monday - Sunday</p>
                <div class="header__head--social">
                    <ul class="social__list">
                        <li class="social__item"> <a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social__item"> <a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social__item"> <a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social__item"> <a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="header__head--right">
                <a href="./login.html"><i class="fas fa-user-alt"></i>Đăng nhập</a>
                <a href="./register.html"><i class="fas fa-user-plus"></i>Đăng ký</a>

            </div>


        </div>
    </div>
    <div class="header__body">
        <div class="container header--inner">
            <div class="header__body--left">
                <a href="./home.html"> <img src="./img/logo.png" alt="" class="logo"></a>
                <a href="./home.html"> <img src="./img/beside_logo.png" alt=""></a>
            </div>
            <div class="header__body--right">
                <div class="header__body--mid">
                    <p><i class="fas fa-phone-alt"></i>Hỗ trợ : (04) 6674 2332 - (04) 3786 8904</p>
                    <div class="header__body--search">
                        <input type="text" class="header__body--search" placeholder="Tìm kiếm...">
                        <i class="fas fa-search"></i>
                    </div>

                </div>
                <div class="header__body--cart">
                    <a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a>
                    <p>0 Sản phẩm</p>
                </div>

            </div>
        </div>
    </div>
    <div class="logo__mobile">
        <a href="./home.html"> <img src="./img/logo.png" alt=""></a>
    </div>

    <div class="menu_mobile">

        <div class="container">
            <a href=""><i class="fas fa-bars"></i></a>
            <div class="menu_mobile-right">
                <a href=""> <i class="fas fa-search"></i> </a>
                <a href="./cart.html"><i class="fas fa-shopping-basket"></i></a>
            </div>
        </div>

    </div>
    <div class="header__menu">
        <div class="container">
            <ul class="menu__list">
                <li class="menu__item">
                    <i class="fas fa-bars"></i>
                </li>
                <li class="menu__item">
                    <a href="{{ route('home')}}">Trang chủ</a>
                </li>
                <li class="menu__item">
                    <a href="{{ route('introduc') }}">Giới thiệu</a>
                </li>
                <li class="menu__item">
                    <a href="{{ route('products')}}">Sản phẩm </a>
                </li>
                {{-- <li class="menu__item">
                    <a href="{{ route('new_products')}}">Sản phẩm mới</a>
                </li> --}}
                <li class="menu__item">
                    <a href="{{ route('news')}}">Tin tức</a>
                </li>
                <li class="menu__item">
                    <a href="{{ route('contact')}}">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
    

</div>

