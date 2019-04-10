<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::all();

       $response = [
         'categories' =>$categories

       ];

       return response()->json($response, 200);
    }
}
