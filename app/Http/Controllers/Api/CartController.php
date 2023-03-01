<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addCartApi(Request $request)
    {
        $productId = $request->product_id;
        // session cart là dữ liệu hoặc 1 array rỗng
        $carts = session()->get('carts') ?? [];
  
        // Kiểm tra số lượng sản phẩm có đủ bán không
        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;

        $quantityUser = 1; // mặc định khi người dùng nhập lên là 1

        // if ($quantityDB < $quantityUser) {
        //     return response()->json(['message' => 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.']);
        // }
        
        
        if (empty($carts)) { // case 1
            $product = [
                'product_id'    => $productId,
                'quantity'      => $quantityUser,
                'product_info'  => $productDB,
            ];

            $carts[$productId] = $product;
            Session::put(['carts' => $carts]);
            Session::save();

        } else {
            if (empty($carts[$productId])) { 
                $carts[$productId] = [
                    'product_id'    => $productId,
                    'quantity'      => $quantityUser,
                    'product_info'  => $productDB,
                ];
                Session::put(['carts' => $carts]);
                Session::save();

            } else {
                $q = $carts[$productId]['quantity'];
                $quantityUser = $q + 1;
                info($quantityUser);
                $carts[$productId] = [
                    'product_id' => $productId,
                    'quantity' => $quantityUser,
                    'product_info' => $productDB,
                ];
                session(['carts' => $carts]);
            }
        }
        
        $qtyCart = count(session('carts'));
        
        return response()->json(['qtyCart' => $qtyCart], 200);
    }

    public function calculateCartApi(Request $request)
    {
        $productPrice = 0;
        $productId = $request->product_id;
        $qtyRequest = $request->qty;
        $carts = session('carts');

        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;
        $quantityUser = $carts[$productId]['quantity'] + $qtyRequest;
        if ($quantityUser == 0){
            unset($carts[$productId]);
            session(['carts' => $carts]);
            return response()->json(0, 200);
        }
        
        // Check Quantity
        // Kiểm tra tồn kho: nếu $quantityUser gửi lên vượt số lượng có trong kho ($quantityDB)
        // thì sẽ thông báo lỗi.
        if ($quantityDB < $quantityUser) {
            return response()->json(['message' => 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.']);
        }

        // Validate OK (check quantity OK)
        // thì lưu quantity mà user gửi lên vào Session
        $quantityUpdate = $quantityUser;
        // Update quantity into Cart
        $carts[$productId]['quantity'] = $quantityUpdate;
        $productPrice = number_format($quantityUpdate * $productDB->price) . '₫';
            
        // Update Session
        session(['carts' => $carts]);

        // return về trang danh sách sản phẩm có trong Cart
        return response()->json(['productId' => $productDB->id, 'productPrice' => $productPrice], 200);
    }
    
    // public function removeProduct( $id)
    // {
    
    // }
}
