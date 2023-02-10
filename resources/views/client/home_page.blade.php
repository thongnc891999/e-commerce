@extends('layouts.master')

@section('content')
    <div class="body">
        <div class="container">

            <div class="product__primacy">
                <div class="product__buy">
                    <div class="product__group">
                        <div class="product__title">
                            <p>Sản Phẩm khuyến mãi</p>
                        </div>
                        <div class="product__next__left">
                            <a onclick="nextSlideLeft_new()" class="product__next--left"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a onclick="nextSlideRight_new()" class="product__next--right"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    {{-- @for ($i = 1; $i <= 6; $i++) --}}
                    {{-- @if (isset($products[$i])) --}}
                    {{-- @dd($products); --}}
                    @foreach ($discountProducts as $key => $discountProduct)
                        {{-- @if ($product->hot == 0) --}}
                        {{-- @if ($loop->first or $loop->iteration < 6)          --}}
                        <div class="product__buy--inner">
                            <div class="product__buy--list">
                                <div class="product__card product__card--small">
                                    <img src="img/spx2/spx2-10.png" alt="">
                                    <div class="product__interactive">
                                        <h4 class="discount">-10%</h4>
                                        <div class="product__btn">
                                            <a href="#" class="btn btn--buy">MUA NGAY</a>
                                            <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product__content">
                                        <h4 class="product__name">{{ $discountProduct->name }}</h4>
                                        <h4 class="product__price">{{ $discountProduct->price }}.$</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- @endif --}}
                    @endforeach
                    {{-- @endif --}}
                    {{-- @endfor --}}
                </div>

                <div class="product__discount">

                    <div class="product__group">
                        <div class="product__title">
                            <p>Sản phẩm nổi bật</p>
                        </div>
                        <div class="product__next">
                            <a onclick="nextSlideLeft()" class="product__next--left"><i class="fas fa-chevron-left"></i></a>
                            <a onclick="nextSlideRight()" class="product__next--right"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="product__discount--inner">
                        <div class="product__discount-row">
                            @foreach ($hotProducts as $key => $hotProduct)
                                @if ($loop->iteration <= $hotProducts->count() / 2)
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
                                            <h4 class="product__name">{{ $hotProduct->name }}</h4>
                                            <h4 class="product__price">
                                                3.$
                                                <span class="product__price--old">{{ $hotProduct->price }}.$</span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="product__discount-row">
                            @foreach ($hotProducts as $key => $hotProduct)
                                @if ($loop->iteration > $hotProducts->count() / 2)
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
                                            <h4 class="product__name">{{ $hotProduct->name }}</h4>
                                            <h4 class="product__price">
                                                3.$
                                                <span class="product__price--old">{{ $hotProduct->price }}.$</span>
                                            </h4>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
            <div class="banner">
                <img src="./img/banner-11140x217.png" alt="">
            </div>

            <div class="product__new">
                <div class="product__group">
                    <div class="product__title">
                        <p>Sản phẩm mới</p>
                    </div>
                    <div class="product__next">
                        <a onclick="nextSlideLeft_bottom()" class="product__next--left"><i
                                class="fas fa-chevron-left"></i></a>
                        <a onclick="nextSlideRight_bottom()" class="product__next--right"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="product__new--inner">
                    <div class="product__discount-row">
                        @foreach ($newProducts as $newproduct)
                            @if($loop->iteration <= $newProducts->count()/2)
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
                                        <h4 class="product__name">{{ $newproduct->name }}</h4>
                                        <h4 class="product__price">
                                            {{ $newproduct->price }}
                                        </h4>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="product__discount-row">
                        @foreach ($newProducts as $newproduct)
                            @if($loop->iteration > $newProducts->count()/2)
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
                                        <h4 class="product__name">{{ $newproduct->name }}</h4>
                                        <h4 class="product__price">
                                            {{ $newproduct->price }}
                                        </h4>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="product__title">
                <p>Tin tức</p>
            </div>
            <div class="news">
                <div class="news__item">
                    <div class="news__img">
                        <img src="./img/Hard-to-kill-indoor-plants.png" alt="">
                    </div>
                    <small class="news__time">Thứ 7 ,ngày 31, tháng 12, năm 2015</small>
                    <h4 class="news__title">15 thiết kế phòng ngủ tuyệt đẹp làm vạn người mê </h4>
                    <p class="news__content">Cùng Sài Gòn Hoa tìm hiểu một vài xu hướng thiết kế sân vườn được ưa
                        chuộng hiện nay nhé ! Kết hợp hàng rào</p>
                    <a href="#" class="news__link">Đọc tiếp</a>
                </div>
                <div class="news__item">
                    <div class="news__img">
                        <img src="./img/11248902_984651828231999_68851709_n.png" alt="">
                    </div>

                    <small class="news__time">Thứ 7 ,ngày 31, tháng 12, năm 2015</small>
                    <h4 class="news__title">15 thiết kế phòng ngủ tuyệt đẹp làm vạn người mê </h4>
                    <p class="news__content">Cùng Sài Gòn Hoa tìm hiểu một vài xu hướng thiết kế sân vườn được ưa
                        chuộng hiện nay nhé ! Kết hợp hàng rào</p>
                    <a href="#" class="news__link">Đọc tiếp</a>
                </div>
                <div class="news__item">
                    <div class="news__img">
                        <img src="./img/The_Sill_84_Hester.png" alt="">
                    </div>

                    <small class="news__time">Thứ 7 ,ngày 31, tháng 12, năm 2015</small>
                    <h4 class="news__title">15 thiết kế phòng ngủ tuyệt đẹp làm vạn người mê </h4>
                    <p class="news__content">Cùng Sài Gòn Hoa tìm hiểu một vài xu hướng thiết kế sân vườn được ưa
                        chuộng hiện nay nhé ! Kết hợp hàng rào</p>
                    <a href="#" class="news__link">Đọc tiếp</a>
                </div>
            </div>
        </div>
    </div>
@endsection
