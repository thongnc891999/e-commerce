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
    <title>Login</title>
    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/home/style_home.css">
    <link rel="stylesheet" href="./css/style_header_footer.css">
    <link rel="stylesheet" href="./css/register/style_register.css">
    <link rel="stylesheet" href="./css/login/style_login.css">
    <script src="./js/header_footer/menu_library.js"></script>
   
</head>

<body>
    <div class="wrapper">

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
                            <a href="./cart.html"><i class="fas fa-shopping-cart"></i></a>
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
                            <a href="./home.html">Trang chủ</a>
                        </li>
                        <li class="menu__item">
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li class="menu__item">
                            <a href="./products.html">Sản phẩm </a>
                        </li>
                        <li class="menu__item">
                            <a href="#">Sản phẩm mới</a>
                        </li>
                        <li class="menu__item">
                            <a href="./news.html">Tin tức</a>
                        </li>
                        <li class="menu__item">
                            <a href="./contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            

        </div>
        <div class="body">
            <div class="container">
                <div class="link-page">
                    <h4>Home / <a href=""> Đăng nhập</a></h4>
                    <div class="register">
                            <form action="" method="post"class="register__form">
                                <div class="register__title">
                                    THÔNG TIN TÀI KHOẢN     
                                </div>
                                <div class="register__form--group">
                                    <label for="register__form--password">Email của bạn <span>*</span></label>
                                    <input type="email" id="register__form--password" name="register__form--password">
                                </div>
                                <div class="register__form--group">
                                    <label for="register__form--re-password">Mật khẩu <span>*</span></label>
                                    <input type="password" id="register__form--re-password" name="register__form--re-password">
                                </div>
                                <div class="register__form--notice">
                                    
                                    <input type="checkbox" name="notice" id="notice">
                                    <label for="notice">Ghi nhớ tài khoản </label>
                                    <a href="">Bạn quên mật khẩu ?</a>
                                </div>
                                <div class="register__form--btn">
                                   
                                    <a href="" class="btn btn--register login">Đăng nhập</a>
                                </div>
                            </form>
                            <div class="register__register">
                                <div class="register__form--btn">
                                    <div class="register__title">
                                        BẠN CHƯA CÓ TÀI KHOẢN ?  
                                    </div>
                                    <p>Đăng ký tài khoản ngay để có thể mua hàng nhanh chóng và dễ dàng hơn  ! Ngoài ra còn có rất nhiều chính sách và ưu đãi cho các thành viên citybike.</p>
                                    <div class="register__form--btn">
                                   
                                        <a href="./register.html" class="btn btn--register">Đăng kí</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer__contact">
                <div class="container  footer__contact--inner">
                    <div class="social">
                        <h3 class="social__title">kÊNH THÔNG TIN TỪ CHÚNG TÔI :</h3>
                        <div class="social__list">
                            <a href="" class="social__item"> <i class="fab fa-facebook"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-twitter"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-youtube"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="email">
                        <h3>ĐĂNG KÍ NHẬN EMAIL TỪ CHÚNG TÔI</h3>
                        <input type="text" placeholder="Enter your email...">
                        <a href=""><i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>

            </div>
            <div class="footer__menu-footer">
                <div class="container">
                    <div class="menu__item">
                        <img src="./img/logo.png" alt="" class="logo">
                        <p>Mang cả không gian xanh vào ngôi nhà của bạn!</p>
                        <a href="tel:+8418006750">1800 6750</a>
                        <a href="mailto:support@sapo.vn">support@sapo.vn</a>
                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">VỀ CHÚNG TÔI</h3>
                        <a href="#">Trang chủ</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">ĐIỀU KHOẢN</h3>
                        <a href="#">Trang chủ</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">HƯỚNG DẪN</h3>
                        <a href="#">Trang chủ</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">CHÍNH SÁCH</h3>
                        <a href="#">Trang chủ</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>

                    </div>

                </div>
            </div>
            <div class="footer__menu-infor">
                <div class="container">
                    <div class="infor__list">
                        <a href="#">Trang chủ</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Sản phẩm</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>
                    </div>
                    <div class="infor__pay">
                        <a href="#"><i class="fab fa-cc-visa"></i></a>
                        <a href="#"><i class="fab fa-cc-stripe"></i></a>
                        <a href="#"><i class="fab fa-cc-paypal"></i></a>
                        <a href="#"><i class="fab fa-cc-mastercard"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p>© Bản quyền thuộc về wiliam1307</p>
            </div>
        </div>
    </div>

</body>

</html>