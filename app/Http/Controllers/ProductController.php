<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;


class ProductController extends Controller
{
    

    public function getDataProducts()
    {
        return Product::query();
    }

    // Lấy ra tất cả record trong table Products
    public function getAllProducts()
    {
        return $this->getDataProducts()->get();
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
        $categoriesCtl = new CategoryController;
        $categories = $categoriesCtl->getAllCategories();
        $products = Product::paginate(9);
        // dd($products);
        return view('client.product_page')->with(
        [
            'categories'  => $categories,
            'products'    => $products,           
        ]);
   }

   public function getCategoryProducts($categoryId)
   {
        $categoriesCtl = new CategoryController;
        $categories = $categoriesCtl->getAllCategories();
        $category_products = Product::where('category_id',$categoryId)->paginate(9);
        
        //    dd(session('carts'));
            return view('client.category_product')->with([
            'categories'            => $categories,
            'category_products'     => $category_products,
            ]);
   }

   public function getProductDetail($id){
  
    $product = Product::whereId($id)->with('product_images')->first();
    // $data['product'] = $product; 
    return view('client.product_detail')->with([
        'product' =>$product,
    ]);
   }

    public function getHotProducts()
    {
        return $this->getDataProducts()->productHot()->limit(8)->get(); 
    }



    public function getDiscountProducts()
    {
        return $this->getDataProducts()->productDiscount()->limit(7)->get(); 
    }



    public function getNewProducts()
    {
        return $this->getDataProducts()->productNew()->limit(8)->get(); 
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
