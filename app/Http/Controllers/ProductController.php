<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

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
        $categoryId = request()->category_id ?? '';
        $categoriesCtl = new CategoryController;
        $categories = $categoriesCtl->getAllCategories();
        $products = Product::when($categoryId, function ($query) use ($categoryId) {
            return $query->where('category_id',$categoryId);
        })->paginate(9);
        
        // Mail::to('thong891999@gmail.com')->send(new TestMail());

        // dd($categories);
        return view('client.product_page')->with(
        [
            'categories'  => $categories,
            'products'    => $products,           
        ]);
    }


    public function getProductDetail($id){
        $product = Product::whereId($id)->with('productImages')->first();
        // dd($product);
        return view('client.product_detail')->with([
            'product'       =>$product,
        ]);
    }

    public function getHotProducts()
    {
        return $this->getDataProducts()->productHot()->limit(8)->get(); 
    }



    public function getDiscountProducts()
    {
        return $this->getDataProducts()->productDiscount()->limit(5)->get(); 
    }



    public function getNewProducts()
    {
        return $this->getDataProducts()->productNew()->limit(8)->get(); 
    }
    
    public function search(Request $request){
        $keyword = $request->keyword;
        $products = Product::Where('name', 'like', '%'. trim($keyword) .'%' )
        ->orWhere('description', 'like',  '%'. trim($keyword) .'%' )->paginate(9);

        $categoriesCtl = new CategoryController;
        $categories = $categoriesCtl->getAllCategories();
        // dd($searchProducts);
        return view('client.product_page')->with([
                'products'   => $products,
                'categories'       => $categories,
            ]);
    }

    public function sortAscendingByPrice(){
        $pricesIncreaseGradually = Product::orderBy('price');
    }

    public function sortDescendingByPrice(){

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
