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
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/home/style_home.css">
    <link rel="stylesheet" href="./css/style_header_footer.css">
    <link rel="stylesheet" href="./css/cart/style_cart.css">

    <script src="./js/jquery.min.js"></script>
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
                    <h4>Home / <a href=""> Giỏ hàng</a></h4>
                </div>
                <div class="cart">
                    <h3 class="cart__title">GIỎ HÀNG</h3>
                    <table class="cart__table">
                        <thead>
                            <th>HÌNH ẢNH</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>ĐƠN GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>THÀNH TIỀN</th>
                            <th>XÓA</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <img src="./img/spx2/spx2-1.png" alt="">
                                </th>
                                <th>
                                    <a href="#">CÂY VĂN PHÒNG</a>

                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th>
                                    <input type="text" value="1">
                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th> <a href=""><i class="fas fa-trash-alt"></i></a></th>

                            </tr>
                            <tr>
                                <th>
                                    <img src="./img/spx2/spx2-1.png" alt="">
                                </th>
                                <th>
                                    <a href="#">CÂY VĂN PHÒNG</a>
                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th>
                                    <input type="text" value="1">
                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th> <a href=""><i class="fas fa-trash-alt"></i></a></th>

                            </tr>
                            <tr>
                                <th>
                                    <img src="./img/spx2/spx2-1.png" alt="">
                                </th>
                                <th>
                                    <a href="#">CÂY VĂN PHÒNG</a>
                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th>
                                    <input type="text" value="1">
                                </th>
                                <th>
                                    270.000đ
                                </th>
                                <th> <a href=""><i class="fas fa-trash-alt"></i></a></th>

                            </tr>

                        </tbody>
                    </table>
                    <div class="cart__btn">
                        <a href="#" class=" btn cart__btn--delete">HỦY ĐƠN HÀNG</a>
                        <a href="#" class="btn cart__btn--continue">TIẾP TỤC MUA</a>
                    </div>
                    <div class="cart__pay">
                        <table>
                            <tr>
                                <th>
                                    TỔNG TIỀN ( CHƯA THUẾ )
                                </th>
                                <th>
                                    270.000đ
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    THUẾ (VAT 10%)
                                </th>
                                <th>
                                    27.000đ
                                </th>

                            </tr>
                            <tfoot>
                                <th>TỔNG PHẢI THANH TOÁN</th>
                                <th>297.000 đ</th>
                            </tfoot>
                        </table>
                        <div class="cart__pay--btn">
                            <a href="#" class="btn cart__btn--pay">THANH TOÁN</a>
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