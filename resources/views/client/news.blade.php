@extends('layouts.master')
    @section('content')
        <div class="body">
            <div class="container">
                <div class="link-page">
                    <h4>Home / <a href=""> Danh sách sản phẩm</a></h4>
                </div>
                <div class="products">
                    <div class="products__menu-vertical">
                        <div class="products__title">
                            <p> Danh mục sản phẩm</p>
                        </div>
                        <ul class="products__menu--list">
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây chậu treo ( 10 ) </a>
                                <ul class="products__menu--list">
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây chậu treo ( 10 ) </a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây có hoa ( 5 )</a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây dây leo</a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây để bàn</a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây may mắn </a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây trang trí </a>
                                    </li>
                                    <li class="products__menu--item">
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#" class="products__menu--link">Cây may mắn </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây có hoa ( 5 )</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây dây leo</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây để bàn</a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây may mắn </a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây trang trí </a>
                            </li>
                            <li class="products__menu--item">
                                <i class="fas fa-chevron-right"></i>
                                <a href="#" class="products__menu--link">Cây may mắn </a>
                            </li>
                        </ul>
                        <div class="products__title">
                            <p>Tin tức nổi bật</p>
                        </div>
                        <div class="news__list">
                            <div class="news__item">
                                <div class="news__item--img"> <img src="./img/Hard-to-kill-indoor-plants.png" alt="">
                                </div>

                                <p class="news__item--info">Hướng dẫn lựa chọn và bố trí cây xanh trong phòng khách</p>
                            </div>
                            <div class="news__item">
                                <div class="news__item--img"><img src="./img/11248902_984651828231999_68851709_n.png"
                                        alt=""></div>

                                <p class="news__item--info">Những sai lầm nên tránh khi bố trí cây xanh trong nhà</p>
                            </div>
                            <div class="news__item">
                                <div class="news__item--img"> <img src="./img/The_Sill_84_Hester.png" alt=""></div>

                                <p class="news__item--info">Hướng dẫn lựa chọn và bố trí cây xanh trong phòng khách</p>
                            </div>
                            <div class="news__item">
                                <div class="news__item--img"><img src="./img/Hard-to-kill-indoor-plants.png" alt="">
                                </div>

                                <p class="news__item--info">Hướng dẫn lựa chọn và bố trí cây xanh trong phòng khách</p>
                            </div>
                        </div>
                        <div class="products__title">
                            <p>Blog tag</p>
                        </div>
                        <div class="blog__tag">
                            <a href="#" class="blog__tag--item blog__tag--active">Cây văn phòng</a>
                            <a href="#" class="blog__tag--item">Cây phát lộc</a>
                            <a href="#" class="blog__tag--item">Cây xanh</a>
                            <a href="#" class="blog__tag--item">Cây trang trí</a>
                            <a href="#" class="blog__tag--item">Cây</a>
                            <a href="#" class="blog__tag--item">Plants</a>
                            <a href="#" class="blog__tag--item">Sức khỏe</a>
                            <a href="#" class="blog__tag--item">Quà tặng</a>
                            <a href="#" class="blog__tag--item">Lưu niệm</a>
                        </div>

                    </div>

                    <div class="products__list">
                        <div class="news__list">
                            <div class="news__card">
                                <h3 class="news__card--title">
                                    <a href="">Cách bố trí hoa chậu trước cửa ấn tượng ngay lần đầu tiên</a>
                                </h3>
                                <div class="news__card--info">
                                    <div class="news__card--inline news__card--date">
                                        <i class="far fa-calendar-alt"></i>
                                        <p class="dt">20/12/2015</p>
                                    </div>
                                    <div class=" news__card--inline news__card--time">
                                        <i class="far fa-clock"></i>
                                        <p class="time">11:20:00 AM</p>
                                    </div>
                                    <div class=" news__card--inline news__card--comment">
                                        <i class="far fa-comment-alt"></i>
                                        <p class="comment"> 0 Bình luận</p>
                                    </div>

                                </div>
                                <div class="news__card--img">
                                    <img src="./img/Hard-to-kill-indoor-plants.png" alt="">
                                </div>
                                <div class="news__card--content">
                                    <p>Như thể hiện sự thân thiện cũng như sự hiếu khách của gia chủ, phần không gian
                                        trước cửa nhà luôn được đầu tư và trang trí khá bắt mắt. Cũng có thể nói đây là
                                        bộ mặt của ngôi nhà, là ấn tượng đầu tiên khi một vị khách ghé chơi nhà bạn đấy.
                                        Hãy cùng Sài Gòn Hoa tham khảo một vài cách bố trí chậu cây hoa cảnh ngay trước
                                        cửa nhà sao cho ấn tượng nhất nhé!</p>
                                </div>
                                <div class="news__card--content"> 7 loại cây xanh để bàn đang được giới văn phòng ưa
                                    chuộng, Những mẫu cây để bàn đang được giới văn phòng ưa chuộng, cây cảnh văn phòng
                                    để bàn thông dụng, những cây cảnh được giới văn phòng ưa chuộng

                                    Cây bạch mã hoàng tử để bàn có chiều cao trung bình từ 20 – 40cm, dáng đẹp, lá cây
                                    màu xanh đậm với những đường vân vàng nhạt mọc đối xứng nhau trông rất sang trọng và
                                    lịch lãm.
                                </div>
                                <div class="news__card--content">
                                    Loại cây này ưa bóng, chịu được nhiệt độ thấp lại có khả năng tạo ẩm và thanh lọc
                                    không khí nên rất thích hợp đặt trong văn phòng làm việc có máy lạnh.
                                </div>
                                <div class="news__card--content">
                                    Cây bạch mã hoàng tử thường được chọn để đặt trên bàn làm việc của sếp, bàn nhỏ ở
                                    phòng tiếp khách hoặc bàn làm việc của các đấng mày râu.
                                </div>
                                <div class="news__card--content">
                                    2. Cây trầu bà đế vương
                                </div>
                                <div class="news__card--content">
                                    Cây trầu bà đế vương tượng trưng cho quyền uy, phong thái dẫn đầu nên thích hợp để
                                    đặt trên bàn làm việc của người lãnh đạo, quản lý doanh nghiệp.
                                </div>
                                <div class="news__card--content">
                                    Lá cây trầu bá đế vương khá to, dày, hơi bóng, đường gân rõ ràng, có hình dạng như
                                    hình trái tim, xòe rộng hướng lên trên trông rất bệ nghễ và cao sang.
                                </div>
                                <div class="news__card--content">
                                    Tùy thuộc vào sở thích cá nhân và thiết kế chủ đạo của không gian phòng làm việc,
                                    bạn có thể chọn loại trầu bà đế vương xanh, trầu bá đế vương vàng hoặc trầu bà đế
                                    vương đỏ.
                                </div>
                                <div class="news__card--img">
                                    <img src="./img/The_Sill_84_Hester.png" alt="">

                                </div>
                                <div class="news__card--content">
                                    Như thể hiện sự thân thiện cũng như sự hiếu khách của gia chủ, phần không gian trước
                                    cửa nhà luôn được đầu tư và trang trí khá bắt mắt. Cũng có thể nói đây là bộ mặt của
                                    ngôi nhà, là ấn tượng đầu tiên khzi một vị khách ghé chơi nhà bạn đấy. Hãy cùng Sài
                                    Gòn Hoa tham khảo một vài cách bố trí chậu cây hoa cảnh ngay trước cửa nhà sao cho
                                    ấn tượng nhất nhé!
                                </div>
                                <div class="news__card--content">
                                    7 loại cây xanh để bàn đang được giới văn phòng ưa chuộng, Những mẫu cây để bàn đang
                                    được giới văn phòng ưa chuộng, cây cảnh văn phòng để bàn thông dụng, những cây cảnh
                                    được giới văn phòng ưa chuộng.

                                </div>
                            </div>


                        </div>
                        <div class="comment">
                            <h3 class="comment__title">
                                BÌNH LUẬN(3)
                            </h3>

                            <ul>
                                <div class="card__member">
                                    <div class="card__member--img">
                                        <img src="./img/member.png" alt="">
                                    </div>
                                    <a href="#" class="card__member--answer">Trả lời</a>
                                    <div class="card__member--info">
                                        <div class="card__member--name">
                                            Nguyễn Văn An
                                        </div>
                                        <div class="card__member--comment">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                                            laboriosam
                                            cum dolorem veniam impedit. Ut, a dolores. Iste nemo, laudantium rem
                                            doloribus
                                            asperiores ipsa quod repellendus nihil recusandae aut magnam?
                                        </div>
                                        <div class="card__member--time">
                                            Thứ 7, 26/12/2015 12: 00 AM
                                        </div>
                                    </div>

                                </div>
                                <li>
                                    <div class="card__member">
                                        <div class="card__member--img">
                                            <img src="./img/member.png" alt="">
                                        </div>
                                        <a href="#" class="card__member--answer">Trả lời</a>
                                        <div class="card__member--info">
                                            <div class="card__member--name">
                                                Nguyễn Văn An
                                            </div>
                                            <div class="card__member--comment">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                                                laboriosam
                                                cum dolorem veniam impedit. Ut, a dolores. Iste nemo, laudantium rem
                                                doloribus
                                                asperiores ipsa quod repellendus nihil recusandae aut magnam?
                                            </div>
                                            <div class="card__member--time">
                                                Thứ 7, 26/12/2015 12: 00 AM
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <div class="card__member">
                                    <div class="card__member--img">
                                        <img src="./img/member.png" alt="">
                                    </div>
                                    <a href="#" class="card__member--answer">Trả lời</a>
                                    <div class="card__member--info">

                                        <div class="card__member--name">
                                            Nguyễn Văn An
                                        </div>
                                        <div class="card__member--comment">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                                            laboriosam
                                            cum dolorem veniam impedit. Ut, a dolores. Iste nemo, laudantium rem
                                            doloribus
                                            asperiores ipsa quod repellendus nihil recusandae aut magnam?
                                        </div>
                                        <div class="card__member--time">
                                            Thứ 7, 26/12/2015 12: 00 AM
                                        </div>
                                    </div>

                                </div>
                                <li>
                                    <div class="card__member">
                                        <div class="card__member--img">
                                            <img src="./img/member.png" alt="">
                                        </div>
                                        <a href="#" class="card__member--answer">Trả lời</a>
                                        <div class="card__member--info">
                                            <div class="card__member--name">
                                                Nguyễn Văn An
                                            </div>
                                            <div class="card__member--comment">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                                                laboriosam
                                                cum dolorem veniam impedit. Ut, a dolores. Iste nemo, laudantium rem
                                                doloribus
                                                asperiores ipsa quod repellendus nihil recusandae aut magnam?
                                            </div>
                                            <div class="card__member--time">
                                                Thứ 7, 26/12/2015 12: 00 AM
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>

                        </div>
                        <h3 class="comment__title">
                            VIẾT BÌNH LUẬN:
                        </h3>
                        <div class="form__comment">
                            <div class="form__comment--group">
                                <input type="text" class="form__comment--name" placeholder="Họ và tên:">
                                <input type="text" class="form__comment--email" placeholder="Email:">
                                <input type="text" class="form__comment--phone" placeholder="Số điện thoại:">
                            </div>
                            <div class="form__comment--group">
                                <input type="text" class="form__comment--comment" placeholder="Bình luận">
                            </div>
                            <div class="form__comment--group">
                                <a href="#" class="btn"> Gửi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
        
       