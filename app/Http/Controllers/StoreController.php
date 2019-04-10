<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Store;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Auth::user()->store;

        $user = Auth::user();

        $products = $store->products;



        return view('stores.view')->withStore($store)->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function updateStore()
    {

        $user = Auth::user();
        $store_id = $user->store->id;
        $store = Store::findOrFail($store_id);

        return view('stores.update')->withStore($store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $logoPath = $request->file('logo')->store('logos');
        $bannerPath = $request->file('banner')->store('banners');


        $store = Store::findOrFail($request->store_id);

        $store_name = $store->name;
        $slug = str_replace(' ', '-', strtolower($store_name));
        $store->slug = $slug;
        $store->phone_number = $request->phone_number;
        $store->owner_name = $request->owner_name;
        $store->description = $request->description;
        $store->address = $request->address;
        $store->logo = $logoPath;
        $store->banner = $bannerPath;


        $store->save();

        return $store;



        // $path = $request->file('main_image')->store($store_name);


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
