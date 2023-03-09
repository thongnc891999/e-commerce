    @extends('layouts.master')

    @section('content')
        <div class="body">
            <div class="container">
                <div class="link-page">
                    <a href="{{ route('home')}}"> Trang chủ <span class="arrow">/</span></a>
                    <span>Danh sách sản phẩm</span>
                </div>
                <div class="products">
                    <div class="products__menu-vertical">
                        <div class="products__title">
                            <p> Danh mục sản phẩm</p>
                        </div>
                        <ul class="products__menu--list">
                            @foreach ($categories as $category)
                                <li class="products__menu--item">
                                    <i class="fas fa-chevron-right"></i>
                                    <a href="{{ route('products', ['category_id' => $category->id, 'name' => $category->name]) }}" class="products__menu--link">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>   
                    </div>
                    <div class="products__list">
                        <div class="products__panner">
                            <img src="./img/The_Sill_84_Hester.png" alt="">
                        </div>
                        <nav class="products__list--nav">
                            <div class="products__list--select">
                                <p>Sắp xếp theo </p>
                                <select name="nav__sort" id="nav__sort">
                                    <option value="price">Tăng dần</option>
                                    <option value="price">Giảm dân</option>
                                </select>       
                            </div>
                        </nav>
                        <div class="products__display" id="list">
                            @foreach($products as $product)
                            <div class="product__card product__card--large">
                                <img src="{{ asset($product->thumbnail)}}" alt="{{ asset($product->thumbnail)}}">
                                <div class="product__interactive">

                                    <div class="product__btn btn_list_products">
                                        <a href="javascript:void(0);" class="btn btn--buy btn_product addCart" data-id="{{ $product->id }}">Thêm Vào Giỏ Hàng</a>
                                        <a href="{{route('detail.product', $product['id'])}}" class="btn btn--buy btn_product">Chi tiết</a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">{{ $product->name}}</h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">{{ number_format($product->price). ' VND'}}<span
                                            class="product__price--old"></span> </h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="products__pages">
                            {{ $products->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection