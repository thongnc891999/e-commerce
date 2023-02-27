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
                        {{-- <th>XÓA</th> --}}
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

                                // update $totalMoney, $totalQuantity
                                $totalQuantity = $totalQuantity + $value['quantity'];
                                $totalMoney = $totalMoney + $money;
                            @endphp
                        <tr>
                            <th>
                                <img src="./img/spx2/spx2-1.png" alt="">
                            </th>
                            <th>
                                <span>{{$productName}}</span>
                            </th>
                            <th>
                                <span>{{number_format($productPrice) }} VNĐ</span>
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
                            <th>
                                {{ number_format($money) }} VNĐ
                            </th>
                            {{-- <th> <a href=""><i class="fas fa-trash-alt"></i></a></th> --}}

                        </tr>
                        @endforeach
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
                                TỔNG TIỀN
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
@endif
@endsection
