
@extends('layouts.master')

@section('content')
<div class="body">
    <div class="header__slide">
        <ul class="circle__list point">
            <li class="circle__item "><input type="radio" onclick="currentSlide(0)" name="slide" checked></li>
            <li class="circle__item "><input type="radio" onclick="currentSlide(1)" name="slide"></li>
            <li class="circle__item "><input type="radio" onclick="currentSlide(2)" name="slide"></li>
        </ul>
        <div class="header__slide--list">
            <img src="./img/slide-1920x590.png" alt="" class="header__slide--item first">
            <img src="./img/slider_2.jpg" alt="" class="header__slide--item">
            <img src="./img/slide-3.jpg" alt="" class="header__slide--item">

        </div>

        <a class=" btn-next-left" onclick="plusSlideLeft()"><i class="fas fa-chevron-left point"></i></a>
        <a class=" btn-next-right" onclick="plusSlideRight()"><i class="fas fa-chevron-right point"></i></a>

    </div>
    <div class="container">
        <div class="product__title">
            <p>Sản phẩm nổi bật</p>
        </div>
        <div class="product__feature">
            <div class="product__new--inner">
                <div class="product__discount-row">
                    @foreach ($hotProducts as $hotproduct)
                        @if($loop->iteration <= $hotProducts->count()/2)
                            <div class="product__card product__card--large">
                                <img src="{{ asset($hotproduct->thumbnail)}}" alt="{{ asset($hotproduct->thumbnail)}}">
                                <div class="product__interactive">
                                    <div class="product__btn">
                                        <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $hotproduct->id }}">Thêm Vào Giỏ Hàng</a>
                                        <a href="{{route('detail.product', $hotproduct['id'])}}" class="btn btn--buy">Chi tiết</a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">{{ $hotproduct->name }}</h4>
                                    <h4 class="product__price">
                                        {{ number_format($hotproduct->price).'₫'}}
                                        {{-- <span class="product__price--old">450.000₫</span> --}}
                                    </h4>
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="product__discount-row">
                    @foreach ($hotProducts as $hotproduct)
                        @if($loop->iteration > $hotProducts->count()/2)
                            <div class="product__card product__card--large">
                                <img src="{{ asset($hotproduct->thumbnail)}}" alt="{{ asset($hotproduct->thumbnail)}}">
                                <div class="product__interactive">
                                    <div class="product__btn">
                                        
                                        <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $hotproduct->id }}">Thêm Vào Giỏ Hàng</a>
                                        <a href="{{route('detail.product', $hotproduct['id'])}}" class="btn btn--buy">Chi tiết</a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">{{ $hotproduct->name }}</h4>
                                    <h4 class="product__price">
                                        {{ number_format($hotproduct->price).'₫'}}
                                        {{-- <span class="product__price--old">450.000₫</span> --}}
                                    </h4>
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

        </div>


        <div class="product__primacy">
          
            <div class="product__discount">

                <div class="product__group">
                    <div class="product__title">
                        <p>Sản phẩm khuyến mại</p>
                    </div>
                    <div class="product__next">
                        <a onclick="nextSlideLeft()" class="product__next--left"><i
                                class="fas fa-chevron-left"></i></a>
                        <a onclick="nextSlideRight()" class="product__next--right"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>

                <div class="product__discount--inner">                    
                    <div class="product__discount-row">
                        @foreach($discountProducts as $discountProduct)
                        <div class="product__card product__card--large">
                            <img src="{{ asset($discountProduct->thumbnail)}}" alt="{{ asset($discountProduct->thumbnail)}}">
                            <div class="product__interactive">
                                <div class="product__btn btn_cart">
                                    <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $discountProduct->id }}">Thêm Vào Giỏ Hàng</a>
                                    <a href="{{route('detail.product', $discountProduct['id'])}}" class="btn btn--buy">Chi tiết</a>
                                </div>

                            </div>
                            <div class="product__content">
                                <h4 class="product__name">{{  $discountProduct->name }}</h4>
                                <h4 class="product__price">
                                    {{ number_format($discountProduct->price).'₫'}}
                                    {{-- <span class="product__price--old">450.000₫</span> --}}
                                </h4>
                            </div>
                        </div>
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
                {{-- <div class="product__next">
                    <a onclick="nextSlideLeft_bottom()" class="product__next--left"><i
                            class="fas fa-chevron-left"></i></a>
                    <a onclick="nextSlideRight_bottom()" class="product__next--right"><i
                            class="fas fa-chevron-right"></i></a>
                </div> --}}
            </div>
            <div class="product__new--inner">
                <div class="product__discount-row">
                    @foreach ($newProducts as $newproduct)
                        @if($loop->iteration <= $newProducts->count()/2)
                            <div class="product__card product__card--large">
                                <img src="{{ asset($newproduct->thumbnail)}}" alt="{{ asset($newproduct->thumbnail)}}">
                                <div class="product__interactive">
                                    <div class="product__btn">
                                        <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $newproduct->id }}">Thêm Vào Giỏ Hàng</a>
                                        <a href="{{route('detail.product', $newproduct['id'])}}" class="btn btn--buy">Chi tiết</a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">{{ $newproduct->name }}</h4>
                                    <h4 class="product__price">
                                        {{ number_format($newproduct->price).'₫'}}
                                        {{-- <span class="product__price--old">450.000₫</span> --}}
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
                                <img src="{{ asset($newproduct->thumbnail)}}" alt="{{ asset($newproduct->thumbnail)}}">
                                <div class="product__interactive">
                                    <div class="product__btn">
                                        <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $newproduct->id }}">Thêm Vào Giỏ Hàng</a>   
                                        <a href="{{route('detail.product', $newproduct['id'])}}" class="btn btn--buy">Chi tiết</a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">{{ $newproduct->name }}</h4>
                                    <h4 class="product__price">
                                        {{ number_format($newproduct->price).'₫'}}
                                        {{-- <span class="product__price--old"></span> --}}
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