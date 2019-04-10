<?php

namespace App\Http\Controllers\API;
use App\Store;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $stores = Store::all();

       $response = [
         'stores' =>$stores

       ];

       return response()->json($response, 200);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProducts($id)
    {
        $store = Store::findOrFail($id);

        // dd($store);

        $products = $store->products;

        $response = [
          'products' =>$products
 
        ];
 
        return response()->json($response, 200);


    }

  }
