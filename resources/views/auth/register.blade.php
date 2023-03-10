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
    <title>Register</title>
    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/home/style_home.css">
    <link rel="stylesheet" href="./css/style_header_footer.css">
    <link rel="stylesheet" href="./css/register/style_register.css">
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
                        <a href="./login.html"><i class="fas fa-user-alt"></i>????ng nh???p</a>
                        <a href="./register.html"><i class="fas fa-user-plus"></i>????ng k??</a>

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
                            <p><i class="fas fa-phone-alt"></i>H??? tr??? : (04) 6674 2332 - (04) 3786 8904</p>
                            <div class="header__body--search">
                                <input type="text" class="header__body--search" placeholder="T??m ki???m...">
                                <i class="fas fa-search"></i>
                            </div>

                        </div>
                        <div class="header__body--cart">
                            <a href="./cart.html"><i class="fas fa-shopping-cart"></i></a>
                            <p>0 S???n ph???m</p>
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
                            <a href="./home.html">Trang ch???</a>
                        </li>
                        <li class="menu__item">
                            <a href="#">Gi???i thi???u</a>
                        </li>
                        <li class="menu__item">
                            <a href="./products.html">S???n ph???m </a>
                        </li>
                        <li class="menu__item">
                            <a href="#">S???n ph???m m???i</a>
                        </li>
                        <li class="menu__item">
                            <a href="./news.html">Tin t???c</a>
                        </li>
                        <li class="menu__item">
                            <a href="./contact.html">Li??n h???</a>
                        </li>
                    </ul>
                </div>
            </div>
            

        </div>
        <div class="body">
            <div class="container">
                <div class="link-page">
                    <h4>Home / <a href=""> ????ng k??</a></h4>
                    <div class="register">
                        <div class="register__title">
                            TH??NG TIN C?? NH??N
                        </div>

                        <form action="" method="post" class="register__form">
                            <div class="register__form--group">
                                <label for="register__form--name">H??? v?? t??n <span>*</span></label>
                                <input type="text" id="register__form--name" name="register__form--name">
                            </div>
                            <div class="register__form--group">
                                <label for="register__form--phone">S??? ??T <span>*</span></label>
                                <input type="text" id="register__form--phone" name="register__form--phone">
                            </div>
                            <div class="register__form--group">
                                <label for="register__form--email">?????a ch??? email <span>*</span></label>
                                <input type="text" id="register__form--email" name="register__form--email">
                            </div>
                            <div class="register__form--group">
                                <label for="register__form--web">Website c???a b???n <span>*</span></label>
                                <input type="text" id="register__form--web" name="register__form--web">
                            </div>
                            <div class="register__form--notice">

                                <input type="checkbox" name="notice" id="notice">
                                <label for="notice">????ng k?? nh???n th??ng tin qua email</label>
                            </div>
                            <div class="register__title">
                                TH??NG TIN T??I KHO???N
                            </div>
                            <div class="register__form--group">
                                <label for="register__form--password">M???t kh???u <span>*</span></label>
                                <input type="password" id="register__form--password" name="register__form--password">
                            </div>
                            <div class="register__form--group">
                                <label for="register__form--re-password">Nh???p l???i m???t kh???u <span>*</span></label>
                                <input type="password" id="register__form--re-password"
                                    name="register__form--re-password">
                            </div>
                            <div class="register__form--btn">
                                <a href="" class="btn btn--back">QUAY L???I</a>
                                <a href="" class="btn btn--register">????NG K??</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer__contact">
                <div class="container  footer__contact--inner">
                    <div class="social">
                        <h3 class="social__title">k??NH TH??NG TIN T??? CH??NG T??I :</h3>
                        <div class="social__list">
                            <a href="" class="social__item"> <i class="fab fa-facebook"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-twitter"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-youtube"></i></a>
                            <a href="" class="social__item"> <i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="email">
                        <h3>????NG K?? NH???N EMAIL T??? CH??NG T??I</h3>
                        <input type="text" placeholder="Enter your email...">
                        <a href=""><i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>

            </div>
            <div class="footer__menu-footer">
                <div class="container">
                    <div class="menu__item">
                        <img src="./img/logo.png" alt="" class="logo">
                        <p>Mang c??? kh??ng gian xanh v??o ng??i nh?? c???a b???n!</p>
                        <a href="tel:+8418006750">1800 6750</a>
                        <a href="mailto:support@sapo.vn">support@sapo.vn</a>
                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">V??? CH??NG T??I</h3>
                        <a href="#">Trang ch???</a>
                        <a href="#">Gi???i thi???u</a>
                        <a href="#">S???n ph???m</a>
                        <a href="#">Tin t???c</a>
                        <a href="#">Li??n h???</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">??I???U KHO???N</h3>
                        <a href="#">Trang ch???</a>
                        <a href="#">Gi???i thi???u</a>
                        <a href="#">S???n ph???m</a>
                        <a href="#">Tin t???c</a>
                        <a href="#">Li??n h???</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">H?????NG D???N</h3>
                        <a href="#">Trang ch???</a>
                        <a href="#">Gi???i thi???u</a>
                        <a href="#">S???n ph???m</a>
                        <a href="#">Tin t???c</a>
                        <a href="#">Li??n h???</a>

                    </div>
                    <div class="menu__item">
                        <h3 class="menu__title">CH??NH S??CH</h3>
                        <a href="#">Trang ch???</a>
                        <a href="#">Gi???i thi???u</a>
                        <a href="#">S???n ph???m</a>
                        <a href="#">Tin t???c</a>
                        <a href="#">Li??n h???</a>

                    </div>

                </div>
            </div>
            <div class="footer__menu-infor">
                <div class="container">
                    <div class="infor__list">
                        <a href="#">Trang ch???</a>
                        <a href="#">Gi???i thi???u</a>
                        <a href="#">S???n ph???m</a>
                        <a href="#">Tin t???c</a>
                        <a href="#">Li??n h???</a>
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
                <p>?? B???n quy???n thu???c v??? wiliam1307</p>
            </div>
        </div>
    </div>

</body>

</html>