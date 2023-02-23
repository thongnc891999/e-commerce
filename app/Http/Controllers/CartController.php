<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showCart()
    {
        $data = [];
        $carts = session('carts');
        // dd($carts);
        $data['carts'] = $carts;
        return view('client.carts', $data);
    }

    public function addCart($productId, Request $request)
    {
        // session cart = data or an empty array
        $carts = session()->get('carts') ?? [];
  
        // Check if the number of products is enough for sale ?
        $productDB = Product::findOrFail($productId);
        $quantityDB = $productDB->quantity;

        $quantityUser = 1; // default each time user add product quantity is 1

        if ($quantityDB < $quantityUser) {
            return back()->with('error', 'Sản phẩm này đã hết hàng. Vui lòng chọn một sản phẩm khác.');
        }
        
        if (empty($carts)) { // case 1
            $product = [
                'product_id'    => $productId,
                'quantity'      => $quantityUser,
                'product_info'  => $productDB,
            ];

            $carts[$productId] = $product;
            session(['carts' => $carts]);

        } else {
            if (empty($carts[$productId])) { 
                $carts[$productId] = [
                    'product_id'    => $productId,
                    'quantity'      => $quantityUser,
                    'product_info'  => $productDB,
                ];
                session(['carts' => $carts]);


            } else {
                $quantityUser = $carts[$productId]['quantity'] + 1;
                $carts[$productId] = [
                    'product_id' => $productId,
                    'quantity' => $quantityUser,
                    'product_info' => $productDB,
                ];
                session(['carts' => $carts]);

            }
        }
        // session(['carts' => $carts]);
        // dd(session('carts'));

        return redirect()->back()->with('success', 'Add sản phẩm vào Giỏ hàng thành công.');
    }

    public function updateQuantity($productId, Request $request)
    {
        $carts = session('carts') ?? [];
        if (empty($carts)) {
            return redirect()->route('client.carts')->with('error', 'Cart chưa có sản phẩm nào cả.');
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
        return redirect()->route('cart')->with('success', 'Update quantity thành công.');
    }

    public function RemoveOneProduct($productId)
    {

    }
}

