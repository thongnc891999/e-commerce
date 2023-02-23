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
        $categoriesctl = new CategoryController;
        $categories = $categoriesctl->getAllCategories();
        $products = ProductController::getAllProducts();
        // dd($categories);
        return view('client.product_page')->with(
        [
            'categories'  => $categories,
            'products'    => $products,           
        ]);
   }

   public function getCategoryProducts($id)
   {
       $category_product = Product::where('id',$id)->get();
       dd($category_product);
       return view('client.category.product')->with([
        'list_product'     =>  $category_product,
       ]);
   }

   public function getProductDetail($id){
  
    $product = Product::whereId($id)->with('product_images')->with('product_detail')->first();
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
