<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index()
    {
        $data = [];

        $carts = session('carts');
        $data['carts'] = $carts;

        return view('carts.index', $data);
    }

    public function addCart($id, Request $request)
    {
        // session('carts') ?? [] 
        // ---> trả về 1 array chứa data hoặc là 1 array rỗng []
        $carts = session('carts') ?? [];


        // Kiểm tra xem số lượng sản phẩm còn đủ để bán hay không ?
        // kiểm tra tồn kho = lấy quantity của sản phẩm đó (trong Kho) - quantity mà người dùng nhập vào
        // nếu quantity (kho) >= quantity (người dùng nhập) ==> OK cho phép add sản phẩm này vào Giỏ
        // ngược lại: quantity (kho < quantity (người dùng nhập)) 
        //      ==> Not OK thông báo lỗi (không cho add sản phẩm này vào giỏ)
        $productDB = Product::findOrFail($id);
        $quantityDB = $productDB->quantity;

        $quantityUser = 1; // Default bằng 1 (cứ mỗi lần add sản phẩm thì mặc định số 
        //   lượng User gửi lên là 1)

        // Check login
        if ($quantityDB < $quantityUser) {
            return back()->with('error', 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.');
        }

        // Tiếp tục, xử lý logic tiếp theo
        // nếu lần đầu, User bấm addCart thì quantity sẽ là 1
        // nhưng với trường hợp User bấm addCart với cũng chính sản phẩm đó thì quantity sẽ tăng lên 1 
        // tức là quantityUser = 2 (số lượng hiện tại + 1).
        // tương tự, ở những lần tiếp theo nếu User đã có sẵn sản phẩm đó rồi
        // lấy số lượng hiện tại + 1
        /// case .... : xử lý tương tự.

        /***
         * Case 1. giỏ hàng trống rỗng: thì tiến hành addCart (với quantityUser = 1)
         * Case 2. giỏ hàng đã có sản phẩm: thì tiến hành foreach để kiểm tra xem trong Giỏ đã có
         * sản phẩm này hay chưa ?
         * Case 2.1. giỏ hàng đã chưa có sản phẩm này thì quantityUser = 1
         * Case 2.2. giỏ hàng đã có sản phẩm này rồi 
         * thì quantityUser = quantity (trong giỏ ứng với sản phẩm đó) + 1
         */
        if (empty($carts)) { // case 1
            $product = [
                'product_id' => $id,
                'quantity' => $quantityUser,
                'product_info' => $productDB,
            ];
    
            $carts[$id] = $product;
    
            // Update or Add sản phẩm vào cart
            session(['carts' => $carts]);
        } else { // case 2
            if (empty($carts[$id])) { // sản phẩm này chưa có trong Giỏ
                // sản phẩm này chưa có nên $quantityUser = 1
                // $quantityUser = 1;
                $carts[$id] = [
                    'product_id' => $id,
                    'quantity' => $quantityUser,
                    'product_info' => $productDB,
                ];

                // Add sản phẩm vào cart
                session(['carts' => $carts]);
            } else { // sản phẩm này đã có trong Giỏ
                $quantityInCart = $carts[$id]['quantity'];
                $quantityUser = $quantityInCart + 1;

                // Update quantity cho Product này vào Session carts
                $carts[$id] = [
                    'product_id' => $id,
                    'quantity' => $quantityUser,
                    'product_info' => $productDB,
                ];

                // Update quantity sản phẩm vào cart
                session(['carts' => $carts]);
            }
        }

        return redirect()->route('cart.index')->with('success', 'Add sản phẩm vào Giỏ hàng thành công.');
    }

    public function updateQuantity($productId, Request $request)
    {
        $carts = session('carts') ?? [];
        if (empty($carts)) {
            return redirect()->route('products.index')->with('error', 'Cart chưa có sản phẩm nào cả.');
        }

        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;

        $quantityUser = $request->quantity;

        // Check Quantity
        // Kiểm tra tồn kho: nếu $quantityUser gửi lên vượt số lượng có trong kho ($quantityDB)
        // thì sẽ thông báo lỗi.
        if ($quantityDB < $quantityUser) {
            return back()->with('error', 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.');
        }

        // Validate OK (check quantity OK)
        // thì lưu quantity mà user gửi lên vào Session
        $quantityUpdate = $quantityUser;

        // Update quantity into Cart
        $carts[$productId]['quantity'] = $quantityUpdate;

        // Update Session
        session(['carts' => $carts]);

        // return về trang danh sách sản phẩm có trong Cart
        return redirect()->route('cart.index')->with('success', 'Update quantity thành công.');
    }

    public function removeProduct($productId)
    {

    }

    // hiển thị Form để User nhập thông tin địa chỉ cần giao hàng
    public function shippingInformation()
    {
        $data = [];

        // get thông tin địa chỉ giao hàng đã được lưu 
        // trong session
        $shippingInfo = session('shipping_info') ?? [];
        $data['shippingInfo'] = $shippingInfo;

        return view('carts.shipping_information', $data);
    }

    // Submit Form thì thông tin địa chỉ cần giao hàng sẽ 
    // được xử lý tại đây.
    // // User chốt đơn thì thông tin sản phẩm có trong Cart
    // // sẽ được xử lý tại đây và nếu thông tin sản phẩm có trong Cart
    // // này OK thì tiến hành Save vào DB và di chuyển đến route('thank-you)
    public function checkoutOrder(ShippingInformationRequest $request)
    {
        // Lấy thông tin mà người dùng gửi lên để
        // lưu vào session có tên là: shipping_info
        $dataInfo = $request->only([
            'fullname',
            'phone',
            'email',
            'address',
        ]);

        // Nếu User đã login rồi thì lấy user_id của nó
        $userId = Auth::id() ?? null;
        // Sau đó set giá trị của user_id này vào biến $dataInfo
        $dataInfo = array_merge($dataInfo, [
            'user_id' => $userId,
        ]);

        // Lưu thông tin sản phẩm có trong giỏ hàng vào DB
        // Lưu thông tin địa chỉ nhận hàng vào DB
        $carts = session('carts');

        // dd($carts);

        // code sample - start
        // $post = Post::find(1);

        // $post->comments()->saveMany([
        //     new Comment(['message' => 'A new comment.']),
        //     new Comment(['message' => 'Another new comment.']),
        // ]);
         // code sample - end

         DB::beginTransaction();


         try {
            $order = Order::create($dataInfo);

            // dùng vòng foreach để tạo ra từng object OrderDetail()
            $saveOrderDetails = [];
            foreach ($carts as $cart) {
                $saveOrderDetails[] = new OrderDetail([
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['quantity'],
                ]);
            }
            // Dùng hàm saveMany() để lưu 1 lúc nhiều record
            $order->orderDetails()->saveMany($saveOrderDetails);
    
            // Logic sendmail xử lý tại đây
            // todo....
    
            // Tạm gử data của Session carts và ShippingInfo qua route thank-you để sử dụng (nếu cần)
            $tmpCarts = $cart;
            $tmpShippingInfo = $dataInfo;
    
            // Đã hoàn tất thì xoá Session carts đi
            /**
             * Delete SESSION
             * 
             * @reference: https://laravel.com/docs/8.x/session#deleting-data
             */
            session()->forget(['carts']);

            // Commit để lưu vào trong DB
            DB::commit();
    
            // Thông báo đơn hàng đã thành công tới User
            // di chuyển qua route thank-you
            return redirect()->route('cart.checkout.thank-you')
                ->with([
                    'success' => ' Đơn hàng đã được thanh toán thành công.',
                    'carts' => $tmpCarts,
                    'shipping_info' => $tmpShippingInfo,
                ]);
         } catch (Exception $exception) {
            DB::rollBack();

            return back()->with('error', 'Thanh toán thất bại.');
         }
    }

    // // User chốt đơn thì thông tin sản phẩm có trong Cart
    // // sẽ được xử lý tại đây và nếu thông tin sản phẩm có trong Cart
    // // này OK thì tiến hành Save vào DB và di chuyển đến route('thank-you)
    // public function checkoutOrder()
    // {

    // }

    public function thankYou()
    {

    }
}

