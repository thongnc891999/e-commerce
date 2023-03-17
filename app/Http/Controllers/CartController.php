<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function showCart()
    {
        $data = [];
        $carts = session('carts');
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

        return redirect()->route('cart')->with('success', 'Add sản phẩm vào Giỏ hàng thành công.');
    }

    public function removeProduct($productId)
    {
        $carts = session('carts');
        unset($carts[$productId]);
        session(['carts' => $carts]);

    return redirect()->back();
    }

    public function showCheckoutCart()
    {
        $carts = session('carts') ?? [];
        
        return view('client.checkout')->with([
            'carts' => $carts,
        ]);
    }
}
