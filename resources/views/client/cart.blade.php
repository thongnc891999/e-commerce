@extends('layouts.master')
@section('content')
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
@endsection
