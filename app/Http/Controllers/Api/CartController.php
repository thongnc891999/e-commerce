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
        // session cart = data or an empty array
        $carts = session()->get('carts') ?? [];
  
        // Check if the number of products is enough for sale ?
        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;

        $quantityUser = 1; // default each time user add product quantity is 1

        // if ($quantityDB < $quantityUser) {
        //     return back()->with('error', 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.');
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
        $productId = $request->product_id;
        $qtyRequest = $request->qty;
        $carts = session('carts');

        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;//5

        //5 
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

        // Update Session
        session(['carts' => $carts]);

        // return về trang danh sách sản phẩm có trong Cart
        return response()->json('ok', 200);
    }
}
