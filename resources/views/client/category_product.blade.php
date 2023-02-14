@extends('layouts.master')

@section('content')
    <div class="body">
        <div class="container">
            <div class="link-page">
                <h4>Home / <a href=""> Cây dạ lam</a></h4>
            </div>
            <div class="product-detail">
                <div class="product-detail__left">
                    <img src="./img/spx2/spx2-11.png" alt="" class="product-detail__left--large">
                    <div class="product-detail__left--bottom">
                        <a href="#" class="product-detail__left--item product-detail__left--active"><img
                                src="./img/spx2/spx2-11.png" alt="" class="product-detail__left--img"></a>
                        <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-12.png" alt=""
                                class="product-detail__left--img"></a>
                        <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-13.png" alt=""
                                class="product-detail__left--img"></a>
                        <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-14.png" alt=""
                                class="product-detail__left--img"></a>

                    </div>
                </div>
                <div class="product-detail__right">
                    <p class="product-detail__right--title">
                        Cây Dạ Lam
                    </p>
                    <h4 class="product-detail__right--price">320.000₫ <span
                            class="product-detail__right--price-old">450.000₫</span> </h4>
                    <p class="product-detail__right--info">Cây mọc thành bụi thưa, thân vươn thẳng với chiều cao cây
                        trung bình từ 0,8-1,2m. Lá hình trứng, mép lá nguyên, gân lá nổi rõ, phiến rộng khoảng từ
                        15-20cm. Lá có màu xanh đậm ở mặt trên, quanh gân lá có màu trắng sữa; mặt dưới lá nhạt màu
                        hơn. Lá cây dạ lam mọc cách, cuống lá dài khi rụng để lại các khía màu nâu nhạt.</p>
                    <div class="product-detail__right--amount">
                        <p class=" btn--amount title">Số lượng</p>
                        <a class="btn--amount btn-sub">-</a>
                        <input class="product--amount" type="text" value="1">
                        <a class="btn--amount btn-add">+</a>
                    </div>
                    <div class="product-detail__right--btn">
                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-info__nav">
                <a href="#" class="product-info--item product-info--active">THÔNG TIN SẢN PHẨM</a>
                <a href="#" class="product-info--item">KHÁCH HÀNG ĐÁNH GIÁ</a>
                <a href="#" class="product-info--item">THẺ TAG</a>
            </div>
            <div class="product-info__detail">
                Tên phổ thông: Dạ lam, Huỳnh tinh cảnh, Dong vằn. <br><br>
                Tên khoa học: Calathea zebrina<br><br>
                Họ thực vật: Marantaceae (Củ dong).<br><br>
                Chiều cao: 0,8-1,2m<br><br>
                Cây dạ lam có nguồn gốc từ Brazil, được du nhập và phân bố rộng khắp ở Việt Nam.
                Cây mọc thành bụi thưa, thân vươn thẳng với chiều cao cây trung bình từ 0,8-1,2m. Lá hình trứng, mép
                lá nguyên, gân lá nổi rõ, phiến rộng khoảng từ 15-20cm. Lá có màu xanh đậm ở mặt trên, quanh gân lá
                có màu trắng sữa; mặt dưới lá nhạt màu hơn. Lá cây dạ lam mọc cách, cuống lá dài khi rụng để lại các
                khía màu nâu nhạt.
                Cây dạ lam thuộc loại cây chịu bóng bán phần hoặc hoàn toàn, nhu cầu nước tương đối cao. Cây được
                nhân giống từ tách bụi, cây mọc khỏe, tốc độ sinh trưởng nhanh với sức sống mạnh.
                Đây là loại cây có dáng đẹp, màu lá mướt mát, tươi khỏe, cây rất phù hợp trồng chậu trang trí nội
                thất-văn phòng.
                Ngoài ra, cây còn có đặc điểm lọc khí, làm xanh mát môi trường, giúp điều hòa không khí, đặc biệt
                tốt cho những môi trường thường xuyên sử dụng các loại máy móc tảng nhiệt. Có thể bày cây ở hành
                lang hay ở giữa sảnh, đặt ở cạnh bàn làm việc hoặc trang trí các góc phòng có diện tích trung bình.

            </div>
            <div class="product__group">
                <div class="product__title">
                    <p>Sản phẩm cùng loại</p>
                </div>
                <div class="product__next">
                    <a onclick="nextSlideLeftProduct()" class="product__next--left"><i
                            class="fas fa-chevron-left"></i></a>
                    <a onclick="nextSlideRightProduct()" class="product__next--right"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="product-same">
                <div class="product-same__inner">
                    <div class="product-same__list">

                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-7.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-8.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-9.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-10.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-1.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-1.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-1.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>
                        <div class="product__card product__card--large">
                            <img src="img/spx2/spx2-1.png" alt="">
                            <div class="product__interactive">
                                <h3 class="product__status product__status--new">New</h3>
                                <div class="product__btn">
                                    <a href="#" class="btn btn--buy">MUA NGAY</a>
                                    <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">Cây xương rồng </h4>
                                <h4 class="product__price">320.000₫ <span
                                        class="product__price--old">450.000₫</span> </h4>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection