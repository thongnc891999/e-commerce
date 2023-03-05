<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = Category::pluck('id')->toArray();
        $data = [
            //seeder category hoa khai trương
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_01.jpg', 
                'price' => 950000,
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_02.jpg', 
                'price' => 1200000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
                
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_03.jpg', 
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_04.jpg',
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_05.jpg',
                'price' => 900000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_06.jpg',
                'price' =>  950000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_07.jpg',
                'price' => 950000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_08.jpg',
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_09.jpg',
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa chúc mừng khai trương LOVE-HKT10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.',
                'thumbnail' => 'img/products/love_hkt/hkt_10.jpg',
                'price' => 1100000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 1, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            //seeder category hoa chia buồn

            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_01.jpg', 
                'price' => 950000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_02.jpg', 
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_03.jpg', 
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_04.jpg', 
                'price' => 1000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_05.jpg', 
                'price' => 950000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_06.jpg', 
                'price' => 1100000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_07.jpg', 
                'price' => 1200000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_08.jpg', 
                'price' => 1100000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_09.jpg', 
                'price' => 900000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_10.jpg', 
                'price' => 1200000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB11', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_11.jpg', 
                'price' => 1200000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kệ hoa tươi kính viếng LOVE-CB12', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_cb/cb_12.jpg', 
                'price' => 1300000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 2, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            
            //seeder category hoa sinh nhật


            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_01.jpg', 
                'price' => 550000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_02.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_03.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_04.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_05.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_06.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_07.jpg', 
                'price' => 800000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_08.jpg', 
                'price' => 800000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_09.jpg', 
                'price' => 750000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_10.jpg', 
                'price' => 800000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hoa sinh nhật tươi đẹp LOVE-SN11', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_sn/sn_11.jpg', 
                'price' => 900000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 3, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        

            //seeder category hoa bó

            [
                'name' => 'Bó hoa tươi LOVE-B01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_01.jpg', 
                'price' => 450000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_02.jpg', 
                'price' => 500000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_03.jpg', 
                'price' => 550000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_04.jpg', 
                'price' => 500000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_05.jpg', 
                'price' => 550000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_06.jpg', 
                'price' => 550000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_07.jpg', 
                'price' => 600000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_08.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_09.jpg', 
                'price' => 500000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_10.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B11', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_11.jpg', 
                'price' => 750000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bó hoa tươi LOVE-B12', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_b/bo_12.jpg', 
                'price' => 600000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 4, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            

            //seeder category hoa giỏ

            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_01.jpg', 
                'price' => 550000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_02.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_03.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_04.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_05.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_06.jpg', 
                'price' => 650000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_07.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_08.jpg', 
                'price' => 750000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_09.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_10.jpg', 
                'price' => 700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giỏ hoa tươi đẹp LOVE-G11', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_g/gio_11.jpg', 
                'price' => 750000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 5, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            

            //seeder category hoa trưng bày

            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD01', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_01.jpg', 
                'price' => 15000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD02', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_02.jpg', 
                'price' => 19700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD03', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_03.jpg', 
                'price' => 29700000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD04', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_04.jpg', 
                'price' => 50000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD05', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_05.jpg', 
                'price' => 1500000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD06', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_06.jpg', 
                'price' => 1600000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD07', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_07.jpg', 
                'price' => 1500000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD08', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_08.jpg', 
                'price' => 1900000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD09', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_09.jpg', 
                'price' => 2000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD10', 
                'description' =>   '1. Hỗ trợ xuất hóa đơn điện tử nhanh chóng cho khách hàng là đơn vị Công ty, Cơ quan, Doanh nghiệp.
                                    2. Tặng kèm thiệp chúc mừng, in băng rôn, banner miễn phí theo từng chủ đề khách hàng yêu cầu
                                    3. Love Flowers cam kết sản phẩm được thực hiện dựa trên mẫu đã chọn với mức độ giống khoảng 80-90%, hoa còn phụ thuộc vào từng khu vực (có hoặc không có loại hoa đó), nếu có thay đổi về màu sắc hoa cũng như loại hoa, phụ kiện sẽ được chúng tôi thông báo trước.
                                    4. Sản phẩm quý khách đặt có thể thay đổi đôi chút do cảm nhận khác nhau về kiểu dáng màu sắc, giữa sản phẩm thực tế và trên hình.
                                    5. Trong điều kiện không có sẵn hoa theo mẫu khách hàng chọn, Love Flowers sẽ chủ động liên lạc với khách hàng để thông báo và tư vấn hoa thay thế, vẫn giữ nguyên mức giá sẽ không thay đổi.
                                    6. Trường hợp không đủ thời gian hoặc không liên lạc được với người đặt, Love Flowers sẽ chủ động thay thế loại hoa khác có ý nghĩa và màu sắc theo mẫu đã chọn.' ,
                'thumbnail' => 'img/products/love_tblhd/tblhd_10.jpg', 
                'price' => 2000000, 
                'status'=> random_int(0, 1), 
                'quantity'=> random_int(0, 50), 
                'type'=> random_int(0, 2),  
                'category_id'=> 6, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
           
            // ['name' => 'Chậu hoa trưng bày lan hồ điệp LOVE-TBLHD12', 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => 10000000, 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=> 6, 'created_at' => date('Y-m-d H:i:s')],


        ];  
        DB::table('products')->insert($data);
    }
}
