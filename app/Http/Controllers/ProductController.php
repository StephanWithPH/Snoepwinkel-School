<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function loadProductDetails($id){
        $product = Product::find($id);
        if(!$product){
            return "Product niet gevonden";
        }
        else if($product){
            return view('productdetails', compact('product'));
        }
    }
    //
}
