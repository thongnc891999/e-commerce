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
                        {{-- <div class="products__title">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        <ul class="products__menu--list">
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">200.000Đ-400.000Đ</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">400.000Đ-600.000Đ</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">600.000Đ-800.000Đ</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">800.000Đ-1.000.000Đ </a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">1.000.000Đ-2.000.000Đ </a>
                            </li>
                        </ul>
                        <div class="products__title">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        <div class="products__color">
                            <div class="products__color--col">
                                <p class="products__color--item products__color--green">Xanh cây</p>
                                <p class="products__color--item products__color--purple">Tím</p>
                                <p class="products__color--item products__color--yellow">Vàng</p>

                            </div>
                            <div class="products__color--col">
                                <p class="products__color--item products__color--orange">Đỏ cam</p>
                                <p class="products__color--item products__color--blue">Xanh trời</p>
                                <p class="products__color--item products__color--pink">Hồng</p>
                            </div>
                        </div> --}}
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
                                {{-- <p>Show</p>
                                <select name="nav__number_show" id="nav__number_show">
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option value="12">12</option>
                                    <option value="15">15</option>
                                </select> --}}
                            </div>

                        </nav>
                        {{-- <input type="radio" name="display" class="display__type" id="display__list"> --}}
                        <div class="products__display" id="list">
                            @foreach($products as $product)
                            <div class="product__card product__card--large">
                                <img src="{{ asset($product->thumbnail)}}" alt="{{ asset($product->thumbnail)}}">
                                <div class="product__interactive">

                                    <div class="product__btn btn_cart">
                                        <a href="javascript:void(0);" class="btn btn--buy addCart" data-id="{{ $product->id }}">Thêm Vào Giỏ Hàng</a>
                                        <a href="#" class="btn btn--buy">Mua Ngay</a>
                                        {{-- <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a> --}}
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
                            {{-- <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">Thêm Vào Giỏ Hàng</a>
                                        <a href="#" class="btn btn--buy">Mua Ngay</a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>
                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">Thêm Vào Giỏ Hàng</a>
                                        <a href="#" class="btn btn--buy">Mua Ngay</a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>
                                </div>
                            </div>
                            <div class="product__card product__card--large">
                                <img src="./img/spx2/spx2-3.png" alt="">
                                <div class="product__interactive">

                                    <div class="product__btn">
                                        <a href="#" class="btn btn--buy">MUA NGAY</a>
                                        <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="product__content">
                                    <h4 class="product__name">Cây xương rồng </h4>
                                    <p class="product__info">Cây Ngọc ngân là loại cây dành cho tình yêu! Đây là món quà
                                        bất ngờ để bạn tặng "người ấy". Ngọc ngân (Valentine) không chỉ đẹp ở phiến lá
                                        xanh đốm trắng.</p>

                                    <h4 class="product__price">320.000₫ <span
                                            class="product__price--old">450.000₫</span> </h4>

                                </div>
                            </div> --}}

                        </div>
                        
                        <div class="products__pages">
                            {{ $products->links() }}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection