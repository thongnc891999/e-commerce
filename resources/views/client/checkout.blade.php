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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title', 'Home page')</title>
    {{-- css --}}
    @include('layouts.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- @section('content') --}}
    <div class="container">
        <div data-tg-refresh="checkout" id="checkout" class="content" data-select2-id="select2-data-checkout">
            <form id="checkoutForm" method="post">
                <input type="hidden" name="_method" value="patch">
                <div class="wrap" data-select2-id="select2-data-422-qv5x">
                    <main class="main">
                        <header class="main__header">
                            <div class="logo logo--left">
                                <a href="/">
                                    <img class="logo__image  logo__image--small " alt="0907710771"
                                        src="//bizweb.dktcdn.net/100/189/969/themes/513705/assets/checkout_logo.png?1646555996831">
                                </a>
                            </div>
                        </header>
                        <div class="main__content" data-select2-id="select2-data-421-nl14">
                            <article class="animate-floating-labels row">
                                <div class="col col--two">
                                    <div class="_8jJlG8">
                                        <div class="nU2ylc">
                                            <div class="MqmqK4">
                                                <div class="Iafoll">
                                                    <svg height="16" viewBox="0 0 12 16" width="12"
                                                        class="shopee-svg-icon icon-location-marker">
                                                        <path
                                                            d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z"
                                                            fill-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div>Địa chỉ nhận hàng</div>
                                            </div>
                                        </div>
                                        <div class="Jw2Sc-">
                                            <div>
                                                <div class="NYnMjH">
                                                    <div class="FVWWQy">Nguyễn Công Thông (+84) 388606414</div>
                                                    <div class="QsWYfx">k196/11 Nguyễn Công Trứ, Phường An Hải Bắc, Quận
                                                        Sơn Trà, Đà Nẵng</div>
                                                    <div class="uk7Wpm">Mặc định</div>
                                                </div>
                                            </div>
                                            <div class="OVZPZl">
                                                <a class="button_submit_address" type="button" href="" data-toggle="modal" data-target="#myModal">Cập nhật</a>
                                                <a class="button_submit_address" type="button" href="" data-toggle="modal" data-target="#myModal">+Thêm Địa Chỉ Mới</a>
                                                {{-- <button class="button_submit_address">Cập nhật</button> --}}
                                                {{-- <a class="change_address" type="button" href="" data-toggle="modal" data-target="#myModal1">Thay đổi</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <div class="section__header">
                                                        <div class="layout-flex">
                                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                                <i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                                                Thêm địa chỉ    
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <section class="section" data-select2-id="select2-data-420-lxdi">
                                                        <div class="section__content" data-select2-id="select2-data-419-2sy2">
                                                            <div class="fieldset">
                                                                <div class="field ">
                                                                    <div class="field__input-wrapper">
                                                                        <input type="text" class="field__input" value=""
                                                                            placeholder="Họ và tên">
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="field__input-wrapper field__input-wrapper--connected">
                                                                        <input name="" type="tel" class="field__input"
                                                                            value="" placeholder="Số điện thoại">
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <select class="field_address form-select form-select-sm mb-3" id="city"
                                                                        aria-label=".form-select-sm">
                                                                        <option value="" selected>Chọn tỉnh thành</option>
                                                                    </select>

                                                                    <select class="field_address form-select form-select-sm mb-3" id="district"
                                                                        aria-label=".form-select-sm">
                                                                        <option value="" selected>Chọn quận huyện</option>
                                                                    </select>

                                                                    <select class="field_address form-select form-select-sm" id="ward"
                                                                        aria-label=".form-select-sm">
                                                                        <option value="" selected>Chọn phường xã</option>
                                                                    </select>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="field__input-wrapper field__input-wrapper--connected">
                                                                        <input name="" type="tel" class="field__input"
                                                                            value="" placeholder="Địa chỉ cụ thể">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="fieldset">
                                                        <h3 class="visually-hidden">Ghi chú</h3>
                                                        <div class="field " data-bind-class="{'field--show-floating-label': note}">
                                                            <div class="field__input-wrapper">
                                                                <label for="note" class="field__label">
                                                                    Ghi chú (tùy chọn)
                                                                </label>
                                                                <textarea name="note" id="note" class="field__input" data-bind="note"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-primary">Xác nhận</button>
                                                    <button type="button" class="btn btn-outline-light text-dark" data-dismiss="modal">Hủy</button>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--two">
                                    <section class="section" data-define="{shippingMethod: ''}">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2
                                                    class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i
                                                        class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                                    Vận chuyển
                                                </h2>
                                            </div>
                                        </div>
                                        <form action="/action_page.php">
                                            <p>Đơn vị vận chuyển:</p>
                                            <input type="radio" name="fav_language" value="ghtc">
                                            <label for="html">Giao hàng tiêu chuẩn(J&T Express)</label><br>
                                            <input type="radio" name="fav_language" value="vcn">
                                            <label for="css">Vận chuyển nhanh(Standard Express)</label><br>
                                        </form>
                                    </section>

                                    <section class="section">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2
                                                    class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i
                                                        class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                                    Thanh toán
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content">

                                            <div class="content-box" data-define="{paymentMethod: undefined}">


                                                <div class="content-box__row">
                                                    <div class="radio-wrapper">
                                                        <div class="radio__input">
                                                            <input name="paymentMethod" type="checkbox" class="input-radio">
                                                        </div>
                                                    </div>
                                                    <div class="content-box__row__desc hide">
                                                        <label for="paymentMethod-438798" class="radio__label">
                                                            <span class="radio__label__primary">Chuyển khoản qua ngân
                                                                hàng</span>
                                                            <span class="radio__label__accessory">
                                                                <span class="radio__label__icon">
                                                                    <i class="payment-icon payment-icon--3"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <p>Sau khi xác nhận đặt hàng, Quý khách có thể đến bất kì PGD
                                                            ngân
                                                            hàng, ATM hoặc sử dụng tính năng Internet Banking để chuyển
                                                            tiền
                                                            vào một trong các tài khoản sau:</p>
                                                        <p></p>
                                                        <p>CHỦ TÀI KHOẢN: TRẦN THANH BÌNH</p>
                                                        <p>+ Vietcombank: 9111122222</p>
                                                        <p>+ Vietinbank: 100555399999</p>
                                                        <p>+ Sacombank: 060105630576</p>
                                                        <p>+ BIDV: 36810000113917</p>
                                                        <p>+ Agribank: 6320205822010</p>
                                                        <p>+ ACB: 111178178</p>
                                                        <p>+ Đông Á: 0110188465</p>
                                                        <p><span>* Lưu ý:</span> Quý khách cần thông báo lại cho chúng
                                                            tôi nội dung
                                                            chuyển khoản để chúng tôi kiểm tra thông tin và xác nhận.
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>
                        </div>
                    </main>
                    <aside class="sidebar">
                        <div class="sidebar__header">
                            <h2 class="sidebar__title order-summary-toggle__text">
                                Đơn hàng
                            </h2>
                        </div>
                        <div class="sidebar__content">
                            <div class="order-summary">
                                <div class="order-summary__sections">
                                    <div class="order-summary__section--product-list">
                                        <table class="product-table">
                                            {{-- <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                                            <thead class="product-table__header">
                                                <tr>
                                                    <th>
                                                        <span class="visually-hidden">Ảnh sản phẩm</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Mô tả</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Sổ lượng</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Đơn giá</span>
                                                    </th>
                                                </tr>
                                            </thead> --}}
                                            @php
                                                $count = 1;
                                                $totalMoney = 0;
                                                $totalQuantity = 0;
                                            @endphp
                                            <tbody>
                                                @foreach ($carts as $cart)
                                                    @php
                                                        $productInfo = $cart['product_info'];
                                                        $money = $productInfo->price * $cart['quantity'];
                                                        $totalMoney = $totalMoney + $money;
                                                    @endphp
                                                    <tr class="product">
                                                        <td class="product__image">
                                                            <div class="product-thumbnail">
                                                                <div class="product-thumbnail__wrapper"
                                                                    data-tg-static="">
                                                                    <img src="{{ asset($productInfo->thumbnail) }}"
                                                                        alt="{{ asset($productInfo->thumbnail) }}"
                                                                        class="product-thumbnail__image">
                                                                    <span class="product-thumbnail__quantity">
                                                                        {{ $cart['quantity'] }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <th class="product__description">
                                                            <span class="product__description__name">
                                                                {{ $productInfo->name }}
                                                            </span>


                                                        </th>
                                                        <td class="product_checkout_price">

                                                            {{ number_format($money) . '₫' }}

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="order-summary__section order-summary__section--discount-code"
                                        data-tg-refresh="refreshDiscount" id="discountCode">
                                        <h3 class="visually-hidden">Mã khuyến mại</h3>
                                        <div class="edit_checkout animate-floating-labels">
                                            <div class="field__input-btn-wrapper">
                                                <div class="field__input-wrapper">
                                                    <label for="reductionCode" class="field__label">Nhập mã giảm
                                                        giá</label>
                                                    <input name="reductionCode" id="reductionCode" type="text"
                                                        class="field__input" autocomplete="off"
                                                        data-bind-disabled="isLoadingReductionCode"
                                                        data-bind-event-keypress="handleReductionCodeKeyPress(event)"
                                                        data-define="{reductionCode: null}" data-bind="reductionCode">
                                                </div>
                                                <button class="btn_discount btn btn-outline-info" type="button">Áp
                                                    dụng</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
                                        data-define="{subTotalPriceText: '1.450.000₫'}"
                                        data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
                                        <table class="total-line-table">
                                            <caption class="visually-hidden">Tổng giá trị</caption>
                                            <thead>
                                                <tr>
                                                    <td><span class="visually-hidden">Mô tả</span></td>
                                                    <td><span class="visually-hidden">Giá tiền</span></td>
                                                </tr>
                                            </thead>
                                            <tbody class="total-line-table__tbody">
                                                <tr class="total-line total-line--subtotal">
                                                    <th class="total-line__name">
                                                        Tạm tính:
                                                    </th>
                                                    <td class="total-line__price">
                                                        {{ number_format($totalMoney) . '₫' }}
                                                    </td>
                                                </tr>
                                                <tr class="total-line total-line--shipping-fee">
                                                    <th class="total-line__name">
                                                        Giảm giá
                                                    </th>
                                                    <td class="total-line__price">0₫</td>
                                                </tr>
                                                <tr class="total-line total-line--shipping-fee">
                                                    <th class="total-line__name">
                                                        Phí vận chuyển:
                                                    </th>
                                                    <td class="total-line__price">0₫</td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="total-line-table__footer">
                                                <tr class="total-line payment-due">
                                                    <th class="total-line__name">
                                                        <span class="payment-due__label-total">
                                                            Tổng cộng:
                                                        </span>
                                                    </th>
                                                    <td class="total-line__price">
                                                        <span
                                                            class="payment-due__price">{{ number_format($totalMoney) . '₫' }}</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div
                                        class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                                        <a href="{{ route('cart') }}" class="previous-link">
                                            <i class="previous-link__arrow">❮</i>
                                            <span class="previous-link__content">Quay về giỏ hàng</span>
                                        </a>
                                        <button type="submit" class="btn btn-outline-danger">ĐẶT HÀNG</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </form>

            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="spinner">
                    <svg viewBox="0 0 30 30">
                        <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                            stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
                            <animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15"
                                dur="0.7s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </svg>
                </symbol>
            </svg>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Id);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Id === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Id);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Id === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
    }
</script>

</html>
