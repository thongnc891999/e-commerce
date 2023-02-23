@extends('layouts.master')

@section('content')
<div class="product-detail">
    <div class="product-detail__left">
        <img src="{{ asset($product->image) }}" alt="{{ $product->image }} class="product-detail__left--large">
        {{-- <div class="product-detail__left--bottom">
            <a href="#" class="product-detail__left--item product-detail__left--active"><img
                    src="./img/spx2/spx2-11.png" alt="" class="product-detail__left--img"></a>
            <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-12.png" alt=""
                    class="product-detail__left--img"></a>
            <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-13.png" alt=""
                    class="product-detail__left--img"></a>
            <a href="#" class="product-detail__left--item"><img src="./img/spx2/spx2-14.png" alt=""
                    class="product-detail__left--img"></a>

        </div> --}}
    </div>
    <div class="product-detail__right">
        <p class="product-detail__right--title">
            {{ $product->name }}
        </p>
        <h4 class="product-detail__right--price">{{ number_format($product->price) }} VND</h4>
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
            <form action="{{ route('add_cart', $product->id) }}" method="post">
                @csrf
                <button type="submit"  class="btn btn--buy" > Thêm Vào Giỏ Hàng </button>
            </form>
            {{-- <a href="#" class="btn btn--show"><i class="fas fa-search"></i></a>
            <a href="" class="btn btn--heart btn--show"><i class="fas fa-heart"></i></a> --}}
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
   
@endsection
