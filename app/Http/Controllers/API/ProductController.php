<?php

namespace App\Http\Controllers\API;
use App\Product;
use App\Store;
use Auth;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::all();

       $response = [
         'products' =>$products

       ];

       return response()->json($response, 200);
    }

    public function show($id)
    {
       

        $product = Product::findOrFail($id);

       $response = [
         'product' =>$product

       ];

       return response()->json($response, 200);
    }

    public function showCategory($id)
    {
       

        $category = Category::findOrFail($id);
       
       
        $products = $category->products;



       $response = [
         'products' =>$products

       ];

       return response()->json($response, 200);
    }

    

    public function latest() {
		 $products = Product::orderBy('created_at', 'desc')
			->take(6)
            ->get();
            
            return $response = [
                'products' =>$products
       
              ];
	}

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
