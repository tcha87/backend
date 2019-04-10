<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Category;
use Storage;
use Auth;
use Alert;
use Illuminate\Http\File;

class ProductController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $store = Auth::user()->store;

       $products = $store->products;

       // dd($products);


        return view('products.products-list')->withProducts($products);
    }

    public function latest() {
		return Product::orderBy('created_at', 'desc')
			->take(3)
			->get();
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        return view ('products.new-product')->withCategories($categories);
    }

    public function autoGenCardCode() {
       $head = 'P';
       $tail = rand ( 100, 999 );
       $cardCode = $head . $tail;
        return $cardCode;
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



      $store_name = Auth::user()->name;
      $store_name = str_replace(' ', '-', strtolower($store_name));

      $filename = $request->main_image->getClientOriginalName();

      $path = $request->main_image->storeAs('main_images', $filename , 'public_uploads');

      $name = $request->name;
      $slug = str_replace(' ', '-', strtolower($name));

      $store_id = Auth::user()->store->id;

        $product = new Product();
        $product->store_id = $store_id;
        //Main Image

        $product->main_image = $path;
        $product->category_id = $request->category_id ;
        $product->name = $request->name;
        $product->slug = $slug;
        $product->description = $request->description;
        $product->price = $request ->price;
        $product->discount = 0 ;


    do {

      $code =  $this->autoGenCardCode ();
      $oldcode = Product::where('code',$code)->get()->toArray();

    }while ( ! $oldcode == null );
        $product -> code = $code;

        $product->save();

        //Main Image Upload
        $product_id = $product->id;

        if($request->hasFile('images')){

          foreach($request->images as $image){
            $fileName = $product->code.$image->getClientOriginalName();
            $image->storeAs('gallery_images', $fileName , 'public_uploads');
            Image::create(['product_id'=> $product_id , 'path'=> $fileName]);
        }

      }

      Alert::success('Product Successfully Created')->autoclose(3000);

      return redirect('/products');

      return $product;

   }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        $images = $product->images;

        // dd($images);
        return view('products.view')
        ->withProduct($product)
        ->withImages($images);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $product = Product::findOrFail($id); 
      $images = $product->images;
      $categories = Category::all();


      return view ('products.edit')->withProduct($product)->withCategories($categories)->withImages($images);
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



      public function images(Request $request, $productId) {
	
		  $file = $request->file('file');
		  $fileName = uniqid('product-image').'.'.$file->guessExtension();
		  $file->move('images/', $fileName);

		  $path = 'images/'.$fileName;

		  $productImage = new Image();
		  $productImage->path = $path;

		  $productImage->save();

		  $product = Product::find($productId);

		  $product->images()->attach($productImage->id);

	     return $product;
	}
}