@extends('layouts.master')

@section('content')
    <div class="body">
        <div class="container">
            <div class="link-page">
                <h4>Home / <a href=""> Liên hệ</a></h4>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4114.094992599367!2d108.15959827702835!3d16.074685097275058!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1624616081720!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact__title">
                THÔNG TIN LIÊN HỆ
            </div>
            <div class="contact">

                <div class="contact__left">
                    <div class="contact__form--group">
                        <label for="contact__form--name">Họ và tên <span>*</span></label>
                        <input type="text" id="contact__form--name" name="contact__form--name">
                    </div>
                    <div class="contact__form--group">
                        <label for="contact__form--phone">Số ĐT <span>*</span></label>
                        <input type="text" id="contact__form--phone" name="contact__form--phone">
                    </div>
                    <div class="contact__form--group">
                        <label for="contact__form--email">Địa chỉ email <span>*</span></label>
                        <input type="text" id="contact__form--email" name="contact__form--email">
                    </div>
                    <div class="contact__form--group">
                        <label for="contact__form--comment">Bình luận <span>*</span></label>
                        <input type="text" id="contact__form--comment" name="contact__form--comment">
                    </div>
                    <div class="contact__form--btn">
                        <a href="" class="btn ">Gửi</a>

                    </div>
                </div>
                <div class="contact__right">
                    <img src="./img/logo.png" alt="">
                    <p>DKT được thành lập với niềm đam mê và khát vọng thành công trong lĩnh vực Thương mại điện
                        tử.Chúng tôi đã và đang khẳng định được vị trí hàng đầu bằng những sản phẩm</p>
                    <a href="tel:+8418006750"> <i class="fas fa-phone"></i> 1800 6750</a>
                    <a href="mailto:support@sapo.vn"> <i class="fas fa-envelope-open"></i>support@sapo.vn</a>
                </div>
            </div>
        </div>
    </div>
@endsection
