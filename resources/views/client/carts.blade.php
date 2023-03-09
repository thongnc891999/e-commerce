@extends('layouts.master')
@section('content')
 {{-- show message --}}
@if(Session::has('success'))
    <p class="text-success">{{ Session::get('success') }}</p>
@endif

{{-- show error message --}}
@if(Session::has('error'))
    <p class="text-danger">{{ Session::get('error') }}</p>
@endif

{{-- display cart info --}}
@if(empty($carts))
<div class="body">
    <div class="container">
        <div class="link-page">
            <h4>Home / <a href=""> Giỏ hàng</a></h4>
        </div>
        <div class="cart_null">
            <h3 class="cart__title">Không có sản phẩm nào trong giỏ hàng.</h3>
            <a href="{{ route('home')}}" class="btn btn-outline-success">Tiếp Tục Mua Hàng</a>
        </div>
    </div>
</div>
    {{-- @dd($carts) --}}
@else
    <div class="body">
        <div class="container">
            <div class="link-page">
                <a href="{{ route('home')}}"> Trang chủ <span class="arrow">/</span></a>
                <span>Giỏ Hàng</span>
            </div>
            <div class="cart">
                <div class="cart_head">
                    <h3 class="cart__title">GIỎ HÀNG</h3>
                    <a href="{{ route('products')}}" title="Continue Shopping" class="continue">Tiếp tục mua hàng</a>
                </div>    
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
                        @php
                            $count = 1;
                            $totalMoney = 0;
                            $totalQuantity = 0;
                        @endphp
                        @foreach ($carts as $value)
                            @php
                                $productInfo = $value['product_info'];
                                $productName = $productInfo->name;
                                $productThumbnail = $productInfo->thumbnail;
                                $productPrice = $productInfo->price;
                                $money = $productPrice * $value['quantity'];

                                // // update $totalMoney, $totalQuantity
                                // $totalQuantity = $totalQuantity + $value['quantity'];
                                $totalMoney = $totalMoney + $money;
                            @endphp
                        <tr>
                            <th>
                                <img src="{{ asset($productThumbnail)}}" alt="{{ asset($productThumbnail)}}">
                            </th>
                            <th>
                                <span>{{$productName}}</span>
                            </th>
                            <th>
                                <span>{{number_format($productPrice).'₫' }}</span>
                            </th>
                            <th>
                                <div class="order-option">
                                    <span id="quantity-field">
                                        <form action="{{ route('update_quantity', ['product_id' => $productInfo->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="product-detail__right--amount">
                                                <a class="btn--amount btn-sub calculate" data-id="{{ $value['product_id']; }}">-</a>
                                                <input class="product--amount{{ $value['product_id']; }}" type="text" value="{{ $value['quantity']; }}" readonly>
                                                <a class="btn--amount btn-add calculate" data-id="{{ $value['product_id']; }}">+</a>
                                            </div>
                                        </form>
                                    </span>
                                </div>
                            </th>
                            <th class="productPrice{{ $value['product_id']; }}">
                                {{ number_format($money).'₫' }} 
                            </th>
                            <th> <a href="{{ route('remove_product',['product_id' => $productInfo->id])}}"><i class="fas fa-trash-alt"></i></a></th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="cart__pay">
                    <table>
                        <tr>
                            <th>
                                TỔNG TIỀN
                            </th>
                            <th class="totalPrice">
                                {{ number_format( $totalMoney).'₫' }} 
                            </th>
                        </tr>
                    </table>
                    <div class="cart__pay--btn">
                        <a href="{{ route('checkout.show') }}" class="cart__btn--pay">THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
